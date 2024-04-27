<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Gallery;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File as FileSystem;


class GalleryController extends Controller
{
  
  
    public function add_imagess(Request $request, $gallery_id)
    {
        // Fetch the gallery by ID
        $gallery = Gallery::findOrFail($gallery_id);
    
        // Fetch all galleries
        if ($request->isMethod('post')) {
            // Validate the request data
            $validated = $request->validate([
                'gallery_id' => 'required|exists:galleries,id',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validate image uploads
            ]);
    
            // Get gallery ID
            $galleryId = $request->input('gallery_id');
    
            // Upload and save each image
            if ($request->hasFile("images")) {
                foreach ($request->file("images") as $file) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path("/gallery22"), $imageName);
    
                    // Create image record associated with the gallery
                    Image::create([
                        'gallery_id' => $galleryId,
                        'filename' => $imageName,
                        // Other image attributes can be added here if needed
                    ]);
                }
            }
    
            return redirect('gallery/list_imagess')->with('success', 'Images uploaded successfully');
        }
    
        return view('gallery.add_imagess', compact('gallery'));
    }
    
    
            public function add_images(Request $request)
        {
            if ($request->isMethod('post')) {
                // Validate the request data
                $validated = $request->validate([
                    'title' => 'nullable|max:255',
                    'thumbnail' => 'image|mimes:jpeg,png,jpg,gif', // Validate image upload
                ]);

                // Check if thumbnail file was uploaded
                if ($request->hasFile('thumbnail')) {
                    $image = $request->file('thumbnail');
                    
                    // Check if the file is not null
                    if ($image !== null) {
                        // Store the uploaded image
                        $imageName = time().'.'.$image->getClientOriginalExtension();
                        $image->move(public_path('gallery'), $imageName);
            
                        // Create the gallery
                        $gallery = new Gallery();
                        $gallery->title = $request->input('title');
                        $gallery->slug = Str::slug($request->input('title')); // Generate slug
                        $gallery->thumbnail = $imageName; // Assign image name to thumbnail attribute
                        $gallery->save();
            
                        return redirect()->route('list_images')->with('success', 'Gallery created successfully');
                    } else {
                        return redirect()->back()->with('error', 'Please upload a valid image file.');
                    }
                } else {
                    return redirect()->back()->with('error', 'Please upload a valid image file.');
                }
            }

            return view('gallery.add_images');
        }

    

        public function list_image()
        {
            // Retrieve all galleries with their associated images
            $galleries = Gallery::with('images')->get();
            
            // Pass the galleries to the view
            return view('gallery.list_images', ['galleries' => $galleries]);
        }
        

  
        public function list_images()
        {
            // Fetch galleries with their associated images
            $galleries = Gallery::with('images')->get();
            
            return view('gallery.list_imagess', ['galleries' => $galleries]);
        }
        

            //     public function show($gallery_id)
            // {
            //     // Fetch the gallery by ID
            //     $gallery = Gallery::findOrFail($gallery_id);

            //     return view('gallery.show', ['gallery' => $gallery]);
            // }

            public function show($gallery_id)
            {
                // Fetch the gallery by ID
                $gallery = Gallery::findOrFail($gallery_id);

                // Now, paginate the images related to this gallery
                $images = Image::where('gallery_id', $gallery->id)->paginate(12); // Adjust the number of items per page as needed

                // Pass both the gallery and the paginated images to the view
                return view('gallery.show', ['gallery' => $gallery, 'images' => $images]);
            }


        
        public function gallery_delete($id)
        {
            // Find the gallery by ID
            $gallery = Gallery::findOrFail($id);
        
            // Delete associated images and their files
            $images = Image::where('gallery_id', $gallery->id)->get();
            foreach ($images as $image) {
                $filePath = public_path("gallery22/" . $image->filename);
                if (FileSystem::exists($filePath)) {
                    FileSystem::delete($filePath);
                }
                $image->delete(); // Delete the image record from the database
            }
        
            // Delete the gallery
            $gallery->delete();
        
            // Redirect back with success message
            return back()->with('success', 'Gallery and associated images deleted successfully.');
        }
        



        public function deleteimage($id){
            $file = Image::findOrFail($id);
            
            // Check if the file exists and delete it
            $filePath = public_path('gallery22/' . $file->filename);
            if (FileSystem::exists($filePath)) {
                FileSystem::delete($filePath);
            }
        
       
            // Delete the file record from the database
            $file->delete();
        
            // Redirect back to the previous page
            return back()->with('success', 'File deleted successfully.');
        }
        

            public function edit($id, Request $request)
            {
                if ($request->isMethod('POST')) {
                    $validated = $request->validate([
                        'images.*' => 'image|mimes:jpeg,png,jpg,gif',
                    ]);

                    // Fetch the gallery by ID
                    $gallery = Gallery::findOrFail($id);

                    // Handle file uploads
                    if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $file) {
                            // Determine the destination path
                            $destination_path = public_path('gallery22');

                            // Generate a unique filename
                            $filename = time() . '_' . $file->getClientOriginalName();

                            // Move the file to the destination path
                            $file->move($destination_path, $filename);

                            // Create a new image record and associate it with the gallery
                            Image::create([
                                'gallery_id' => $gallery->id,
                                'filename' => $filename,
                            ]);
                        }
                    }

                    // Redirect back to the edit page with a success message
                    return redirect()->route('gallery.list_imagess', ['gallery_id' => $gallery->id])->with('success', 'Images updated successfully');
                }

                    // Fetch the gallery by ID
                    $gallery = Gallery::findOrFail($id);

                    // Fetch existing images associated with the gallery
                    $existingImages = Image::where('gallery_id', $gallery->id)->get();

                    return view('gallery.edit', ['gallery' => $gallery, 'existingImages' => $existingImages]);
                }


               public function edit_gallery($id)
            {
                // Fetch the gallery by ID
                $gallery = Gallery::findOrFail($id);
                
                return view('gallery.edit_gallery', compact('gallery'));
            }

            public function update_gallery(Request $request, $id)
            {
                // Validate the request data
                $validated = $request->validate([
                    'title' => 'required|max:255',
                    'thumbnail' => 'image|mimes:jpeg,png,jpg,gif', // Validate image upload
                ]);

                // Fetch the gallery by ID
                $gallery = Gallery::findOrFail($id);
                // dd($gallery);
                
                // Update the gallery title
                $gallery->title = $request->title;
                $gallery->slug = Str::slug($request->input('title')); // Generate slug

                // Check if a new thumbnail is uploaded
                if ($request->hasFile('thumbnail')) {
                    // Store the uploaded image
                    $imageName = time() . '.' . $request->thumbnail->getClientOriginalExtension();
                    $request->thumbnail->move(public_path('gallery'), $imageName);
                    
                    // Update the thumbnail filename
                    $gallery->thumbnail = $imageName;
                }

                // Save the changes
                $gallery->save();

                // Redirect back to the gallery list with a success message
                return redirect('gallery/list_images')->with('success', 'Gallery updated successfully');
            }


}
