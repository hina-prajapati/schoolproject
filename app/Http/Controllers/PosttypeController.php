<?php

namespace App\Http\Controllers;

use App\Models\Posttype;
use Illuminate\Http\Request;

class PosttypeController extends Controller
{
    public function posttype_add(Request $request){


        if($request->method()=='POST'){
            $validated = $request->validate([
                'image' => 'nullable',
                'p_name' => 'nullable|max:255',
                's_name' => 'nullable|max:255',
                'description' => 'nullable',
                'link' => 'nullable',
                'color' => 'nullable',
            ]);

            // $file = $request->file('image');
            // $image_name = $file->getClientOriginalName();
            // $file->move('posttypes', $image_name);
            $image_name = null; // Initialize $image_name with null

            if ($request->file('image')) {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();
                $file->move('posttypes', $image_name);
            }
            

            $data = new Posttype;
            $data->image=$image_name;
            $data->p_name=$request->p_name;
            $data->s_name=$request->s_name;
            $data->description=$request->description;
            $data->link=$request->link;
            $data->color=$request->color;
           $data->save();
           return redirect('/posttype/posttype_list')->with('success','Data Added Successfully');
        }
        return view('posttype.posttype_add');
        
    }

    public function posttype_list(){
        $data = posttype::get()->toArray();
        return view('posttype.posttype_list',['list'=>$data]);
    }

    public function posttype_delete($id){

               
        Posttype::where('id', $id)->delete();
        return redirect()->back()->with('Success','Data Deleted Successfully');
       }

       public function posttype_edit($id, Request $request){

        if($request->method()=='POST'){
            $validated = $request->validate([
            
                'p_name' => 'nullable|max:255',
                's_name' => 'nullable|max:255',
                'description' => 'nullable',
                'link' => 'nullable',
                'color' => 'nullable',
            ]);
    
            
            $file = $request->file('image');
            if($file){
            $image_name = $file->getClientOriginalName();
            $file->move('posttypes', $image_name);
                if(file_exists('posttypes/'.$request->old_image)){
                    unlink('posttypes/'.$request->old_image);
                }
            }else{
                $image_name = $request->old_image;
            }
           // dd($image_name);
            
            $data = posttype::find($id);
            $data->image=$image_name;
            $data->p_name=$request->p_name;
            $data->s_name=$request->s_name;
            $data->description=$request->description;
            $data->link=$request->link;
            $data->color=$request->color;
            $data->update();
            return redirect('/posttype/posttype_list')->with('success','Data Update Successfully');
        }
    
        $data = posttype::get()->where('id',$id)->first()->toArray();
        return view('posttype.posttype_edit',['data'=>$data]);
    
    }
}
