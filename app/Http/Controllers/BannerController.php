<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;

class BannerController extends Controller
{
    
       public function add(Request $request)
       {
           if ($request->isMethod('post')) {
               $validated = $request->validate([
                   'title' => 'nullable|max:255',
                   'thumbnail' => 'mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed
            
               ]);
       
       
                   $event = new Banner;
                   $event->title = $request->title;
                   $event->save();


                   if ($request->hasFile('thumbnail')) {
                       $image = $request->file('thumbnail');
                       $imageName = time().'.'.$image->getClientOriginalExtension();
                       $path = $request->file('thumbnail')->move('banners', $imageName); // Adjust storage path as needed
                   
                       // Save only the image filename to the database
                       $event->thumbnail = $imageName;
                       $event->save();
                   }

                   return redirect('/banner/list')->with('success', 'Event Added Successfully');
               }
           
               return view('banner.add');
           }


           public function list(){

            $banners = Banner::all();
            // dd($banners);
            return view('banner.list', ['banners' => $banners]);
           }


           public function edit($id){
            $banners = Banner::findOrFail($id);
            // dd($banners);
            return view('banner.edit-banner', ['banners' => $banners]);
           }

           public function update(Request $request, $id){
            $banners = Banner::findOrFail($id);
            // dd($banners);
            if($request->hasFile("thumbnail")){
                if (FileSystem::exists("banners/".$banners->thumbnail)) {
                    FileSystem::delete("banners/".$banners->thumbnail);
                }
                $file=$request->file("thumbnail");
                $banners->thumbnail=time()."_".$file->getClientOriginalName();
                $file->move('banners',$banners->thumbnail);
                $request['thumbnail']=$banners->thumbnail;
            }
        
               $banners->update([
                   "title" =>$request->title,
             
                   "thumbnail"=>$banners->thumbnail,
               ]);
               return redirect('/banner/list')->with('success', 'Event Update Successfully');
            }


            public function destroy($id)
            {
                 $banners=Banner::findOrFail($id);
         
                 if (FileSystem::exists("banners/".$banners->thumbnail)) {
                     FileSystem::delete("banners/".$banners->thumbnail);
                 }
                //  $images=Image::where("post_id",$banners->id)->get();
                //  foreach($images as $image){
                //     if (File::exists("images/".$image->image)) {
                //         File::delete("images/".$image->image);
                //     }
                //  }
                 $banners->delete();
                 return back();
            }
           
}
