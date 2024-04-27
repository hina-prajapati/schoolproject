<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BulletinBoard;
use Illuminate\Support\Facades\File as FileSystem;


class BulletinBoardController extends Controller
{

    public function index()
    {
        $posts=BulletinBoard::all();
        return view('bulletinboards.index')->with('posts',$posts);
    }


    public function create()
    {
        return view('bulletinboards.create');
    }


    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);
 
            $post =new BulletinBoard([
                "title" =>$request->title,
              'slug' => Str::slug($request->input('title')),
                "date" =>$request->date,
                "link" =>$request->link,
                "place" =>$request->place,
                "cover" =>$imageName,
            ]);
           $post->save();
        }
 
       
        return redirect("/bulletinboards/list")->with('Data Added Successfully');
    }

    public function edit($id)
    {
        $posts=BulletinBoard::findOrFail($id);
        return view('bulletinboards.edit')->with('posts',$posts);
    }
 
    public function update(Request $request,$id)
    {
     $post=BulletinBoard::findOrFail($id);
     if($request->hasFile("cover")){
         if (FileSystem::exists("cover/".$post->cover)) {
            FileSystem::delete("cover/".$post->cover);
         }
         $file=$request->file("cover");
         $post->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$post->cover);
         $request['cover']=$post->cover;
     }
 
        $post->update([
            "place"=>$request->place,
            "title" =>$request->title,
            "date"=>$request->date,
            "link"=>$request->link,
            "cover"=>$post->cover,
           
            'slug' => Str::slug($request->input('title')),

        ]);
 
      
 
        return redirect("/bulletinboards/list");
 
    }

    public function destroy($id)
    {
         $posts=BulletinBoard::findOrFail($id);
 
         if (FileSystem::exists("cover/".$posts->cover)) {
            FileSystem::delete("cover/".$posts->cover);
         }
        
         $posts->delete();
         return back();
    }



            public function show($slug)
        {
         
            $bulletinBoardItem = BulletinBoard::where('slug', $slug)->firstOrFail();
            // dd($bulletinBoardItem);

            return view('bulletinboards.show', ['bulletinBoardItem' => $bulletinBoardItem]);
        }


        public function otherPage()
        {
            $noticesForOtherPages = Notice::orderBy('created_at', 'desc')->skip(4)->get();

            return view('pages.bulletin-board', ['noticesForOtherPages' => $noticesForOtherPages]);
        }

}
