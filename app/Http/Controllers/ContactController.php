<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;

class ContactController extends Controller
{
    public function add(Request $request){

        if($request->isMethod('post')){
            $validation = $request->validate([
              'title' => 'nullable',
              'thumbnail' => 'mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed

            ]);

            $contacts = new Contact;
            $contacts->title = $request->title;
            $contacts->save();

            if($request->hasFile('thumbnail')){
                $image = $request->file('thumbnail');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $path = $request->file('thumbnail')->move('contacts', $imageName);
                $contacts->thumbnail = $imageName;
                $contacts->save();
            }
            return redirect('/contacts/list')->with('success', 'Banner Added Successfully');

        }

        return view('contacts.add');
    }

    public function list(){
        $contacts = Contact::all();
        return view('contacts.list', ['contacts' => $contacts]);
    }


    public function edit($id){
        $contacts = Contact::findOrFail($id);
        return view('contacts.edit', ['contacts' => $contacts]);
    }

    public function update(Request $request, $id){
        $contacts = Contact::findOrFail($id);

        if($request->hasFile('thumbnail')){
            if(FileSystem::exists("contacts/".$contacts->thumbnail)){
                FileSystem::delete("contacts/".$contacts->thumbnail);

            }
            $image = $request->file('thumbnail');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('thumbnail')->move('contacts', $imageName);
            $contacts->thumbnail = $imageName;

        }

        $contacts->update([
            'title' => $request->title,
            'thumbnail' =>$contacts->thumbnail,

        ]);
        return redirect('/contacts/list')->with('success', 'Contact Updated Successfully');

    }

    public function destroy($id){
        $contacts = Contact::findOrFail($id);
        if(FileSystem::exists("contacts/".$contacts->thumbnail)){
            FileSystem::delete("contacts/".$contacts->thumbnail);
        }
        $contacts->delete();
        return back();
    }
}
