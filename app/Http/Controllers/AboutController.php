<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\File as FileSystem;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function add(Request $request){

        if($request->isMethod('post')){
            $validation = $request->validate([
                'title' => 'nullable',
                'thumbnail' => 'mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed
            ]);

            $abouts = new About;
            $abouts->title = $request->title;
            $abouts->save();

            if($request->hasFile('thumbnail')){
                $image = $request->file('thumbnail');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                // dd($imageName);
                $path = $request->file('thumbnail')->move('abouts', $imageName);
                $abouts->thumbnail = $imageName;
                // dd($imageName);
                $abouts->save();
            }
            return redirect('/abouts/list')->with('success', 'Banner Added Successfully');
        }
        return view('abouts.add');
    }

    public function list(){
        $abouts = About::all();
        return view('abouts.list', ['abouts' => $abouts]);
    }

    public function edit($id){
        $abouts = About::findOrFail($id);
        return view('abouts.edit', ['abouts' => $abouts]);
    }

    public function update(Request $request, $id){
        $abouts = About::findOrFail($id);

        if($request->hasFile('thumbnail')){
            if(FileSystem::exists("abouts/".$abouts->thumbnail)) {
                (FileSystem::delete("abouts/".$abouts->thumbnail));

            }

            $image = $request->file('thumbnail');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('thumbnail')->move('abouts', $imageName);
            $abouts->thumbnail = $imageName;
        }

        $abouts->update([
            'title' =>$request->title,
            'thumbnail' => $abouts->thumbnail,
             
        ]);

        return redirect('/abouts/list')->with('success', 'Banner Updated Successfully');

    }


    public function destroy($id){
        $abouts = About::findOrFail($id);

        if(FileSystem::exists('abouts/'.$abouts->thumbnail)){
            FileSystem::delete('abouts/'.$abouts->thumbnail);
        }
        $abouts->delete();
        return back();
    }
}
