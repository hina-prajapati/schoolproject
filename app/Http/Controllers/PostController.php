<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use App\Models\Posttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\File as FileSystem;


class PostController extends Controller
{

    public function post_add(Request $request){
         
        if($request->method()=='POST'){
            $validated = $request->validate([
              
                'icon' => 'nullable|max:255',
                'section_id' => 'nullable|max:255',
                'title' => 'nullable|max:255',
                'short_description' => 'nullable|max:255',
                'long_description' => 'nullable|max:255',
                'description' => 'nullable',
                'link' => 'nullable',
                'date' => 'nullable',
                'color' => 'nullable',
                'filename' => 'nullable|array',
                'filename.*' => 'nullable|mimes:pdf,jpg,jpeg,png,doc,docx,zip|max:2048',                
                'image' => 'nullable',
                'filename.*' => 'nullable|mimes:jpeg,jpg,png,pdf|max:2048', // Allow multiple files with specified formats and maximum size

            ]);
            
            $image_name = null;
        
         
            

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();

                if (file_exists('postt/' . $image_name)) {
                    return redirect()->back()->with('error', 'A file with the same name already exists.');
                }
                $file->move('postt', $image_name);
            }

      

            $data = new Post;
          
            $data->image=$image_name;
            // $data->filename = $filename;
            $data->icon=$request->icon;
            $data->date=$request->date;
            $data->section_id=$request->section_id;
            $data->title=$request->title;
            $data->short_description=$request->short_description;
            $data->long_description=$request->long_description;
            $data->description=$request->description;
            $data->link=$request->link;
            $data->color=$request->color;
            // dd($data);
           $data->save();
           $postId = $data->id;


           
           if ($request->hasFile('filename')) {
            foreach ($request->file('filename') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
        
                if ($extension == 'pdf') {
                    $destination_path = public_path() . '/files';
                } else {
                    $destination_path = public_path() . '/files';
                }
        
                $file->move($destination_path, $filename);
                $newFile = new File();
                $newFile->filename = $filename;
                // Assuming you have the post_id available
                $newFile->post_id = $postId; 
                $newFile->save();
                        }
            
         
        }
           return redirect('/post/post_list')->with('success','Data Added Successfully');
        }

        $data = Posttype::get()->toArray();
        // dd($data);
        return view('post.post_add',['list'=>$data]);
        }

        public function post_list()
        {
            $posts = Post::all(); // Fetch posts as Eloquent objects
        
            return view('post.post_list', ['posts' => $posts]);
        }
        

        public function show($postId)
        {
            $files = File::where('post_id', $postId)->get();
            $post = Post::findOrFail($postId); // Fetch the post associated with $postId
        
            return view('post.post_list', ['post' => $post, 'files' => $files]);
        }
        
       
        

        public function downloadFile($filename)
        {
            // Determine the file directory based on the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            if ($extension === 'pdf') {
                $directory = 'files';
            } else {
                $directory = 'files';
            }

            // Construct the full file path
            $filePath = public_path($directory . '/' . $filename);

            // Check if the file exists
            if (!file_exists($filePath)) {
                abort(404);
            }

            // Return the file as a response to trigger the download
            return response()->download($filePath, $filename);
        }
      
    
    


      
//     public function post_edit($id, Request $request){

//         if($request->method()=='POST'){
//             $validated = $request->validate([
//                'image' => 'nullable',
//                 'icon' => 'nullable|max:255',
//                 'section_id' => 'max:255',
//                 'title' => 'nullable|max:255',
//                 'short_description' => 'nullable|max:255',
//                 'long_description' => 'nullable|max:255',
//                 'description' => 'nullable',
//                 'link' => 'nullable',
//                 'color' => 'nullable',
//             ]);
//             $image_name = null;
//             $filename = null;

            
          
          
//        // Find the post to edit
// $post = Post::find($postId);

// // Handle file uploads
// if ($request->hasFile('filename')) {
//     foreach ($request->file('filename') as $file) {
//         // Determine the file extension
//         $extension = $file->getClientOriginalExtension();

//         // Generate a unique filename
//         $filename = time() . '_' . $file->getClientOriginalName();

//         // Determine the destination path based on the file extension
//         if ($extension == 'pdf') {
//             $destination_path = public_path() . '/files';
//         } else {
//             $destination_path = public_path() . '/images';
//         }

//         // Move the file to the destination path
//         $file->move($destination_path, $filename);

//         // Create a new file record and associate it with the post
//         $newFile = new File();
//         $newFile->filename = $filename;
//         $newFile->post_id = $post->id;
//         $newFile->save();
//     }
// }

//            // dd($image_name);
//             $data = Post::find($id);

  
//             $data->image=$image_name;
//             $data->icon=$request->icon;
//             $data->date=$request->date;
//             $data->section_id=$request->section_id;
//             $data->title=$request->title;
//             $data->short_description=$request->short_description;
//             $data->long_description=$request->long_description;
//             $data->description=$request->description;
//             $data->link=$request->link;
//             $data->color=$request->color;
//            $data->update();
//            return redirect('/post/post_list')->with('success','Data Updated Successfully');
//         }
//         $abc = Posttype::get()->toArray();
//     $data = post::get()->where('id',$id)->first()->toArray();
//         return view('post.post_edit',['data'=>$data],['list'=>$abc]);
 
 
//     }


public function post_edit($id, Request $request)
{
    if ($request->method() == 'POST') {
        $validated = $request->validate([
            'image' => 'nullable',
            'icon' => 'nullable|max:255',
            'section_id' => 'max:255',
            'title' => 'nullable|max:255',
            'short_description' => 'nullable|max:255',
            'long_description' => 'nullable|max:255',
            'description' => 'nullable',
            'link' => 'nullable',
            'color' => 'nullable',
        ]);

// Find the post to edit
$data = Post::findOrFail($id);
$postId = $id; // Assuming the post_id is already available from the route parameter $id

// Get the existing filenames associated with the post
$existingFilenames = $data->files->pluck('filename')->toArray();

// Handle file uploads
if ($request->hasFile('filename')) {
    foreach ($request->file('filename') as $file) {
        // Determine the file extension
        $extension = $file->getClientOriginalExtension();

        // Generate a unique filename
        $filename = time() . '_' . $file->getClientOriginalName();

        // Check if the filename already exists in the existing filenames array
        if (!in_array($filename, $existingFilenames)) {
            // Determine the destination path based on the file extension
            if ($extension == 'pdf') {
                $destination_path = public_path() . '/files';
            } else {
                $destination_path = public_path() . '/files';
            }

            // Move the file to the destination path
            $file->move($destination_path, $filename);

            // Create a new file record and associate it with the post
            $newFile = new File();
            $newFile->filename = $filename;
            $newFile->post_id = $postId; // Set the post_id obtained from the route parameter
            $newFile->save();
        }
    }
}



        // Update post details
        $data->update([
            'image' => $request->image,
            'icon' => $request->icon,
            'date' => $request->date,
            'section_id' => $request->section_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'description' => $request->description,
            'link' => $request->link,
            'color' => $request->color,
        ]);

        // Redirect to the post list page with a success message
        return redirect('/post/post_list')->with('success', 'Post updated successfully');
    }

    $abc = Posttype::get()->toArray();
    $data = Post::findOrFail($id)->toArray();
    $existingFiles = File::where('post_id', $id)->get()->groupBy('post_id');
    return view('post.post_edit', ['data' => $data, 'list' => $abc, 'existingFiles' => $existingFiles]);
}



public function post_delete($id)
{
    // Find the post by ID
    $post = Post::findOrFail($id);

    // Delete associated files
    $files = File::where("post_id", $post->id)->get();
    foreach ($files as $file) {
        $filePath = public_path("files/" . $file->filename);
        if (FileSystem::exists($filePath)) {
            FileSystem::delete($filePath);
        }
        $file->delete(); // Delete the file record from the database
    }

    $post->delete();

    // Redirect back with success message
    return back()->with('success', 'Post and associated files deleted successfully.');
}


public function showEvent($slug)
{
    $event = Post::where('slug', $slug)->firstOrFail();
    
    return view('pages.event', ['event' => $event]);
}


}
