<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\AchievementImages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;


class AchievementController extends Controller
{
    public function add(Request $request)
        {
            if ($request->isMethod('post')) {
                // Validate the request data
                $validated = $request->validate([
                    'title' => 'nullable|max:255',  
                    'date' => 'nullable',
                    'place' => 'nullable',
                    'thumbnail' => 'image|mimes:jpeg,png,jpg,gif', // Validate image upload
                ]);

                // Check if thumbnail file was uploaded
                if ($request->hasFile('thumbnail')) {
                    $image = $request->file('thumbnail');
                    
                    // Check if the file is not null
                    if ($image !== null) {
                        // Store the uploaded image
                        $imageName = time().'.'.$image->getClientOriginalExtension();
                        $image->move(public_path('achievement'), $imageName);
            
                        // Create the gallery
                        $gallery = new Achievement();
                        $gallery->title = $request->input('title');
                        $gallery->date = $request->input('date');
                        $gallery->place = $request->input('place');
                        $gallery->slug = Str::slug($request->input('title')); // Generate slug
                        $gallery->thumbnail = $imageName; // Assign image name to thumbnail attribute
                        $gallery->save();
            
                        return redirect()->route('list')->with('success', 'Gallery created successfully');
                    } else {
                        return redirect()->back()->with('error', 'Please upload a valid image file.');
                    }
                } else {
                    return redirect()->back()->with('error', 'Please upload a valid image file.');
                }
            }

            return view('achievement.add');
        }


        public function list()
        {
         
            $achievements = Achievement::all();

            return view('achievement.list', ['achievements' => $achievements]);
        }


        public function show($achievement_id)
        {
            // Fetch the achievement by ID
            $achievement = Achievement::findOrFail($achievement_id);
            // dd($achievement);
        
            return view('achievement.show', ['achievement' => $achievement]);
        }
        

    

        public function delete($id)
        {
            // Find the achievement by ID
            $achievement = Achievement::findOrFail($id);
        
            // Delete the thumbnail image from the achievement folder
            $thumbnailPath = public_path("achievement/" . $achievement->thumbnail);
            if (FileSystem::exists($thumbnailPath)) {
                FileSystem::delete($thumbnailPath);
            }
        
            // // Delete associated images and their files
            $achievementImages = AchievementImages::where('achievement_id', $achievement->id)->get();
            foreach ($achievementImages as $image) {
                $imagePath = public_path("achievement/" . $image->filename);
                if (FileSystem::exists($imagePath)) {
                    FileSystem::delete($imagePath);
                }
                $image->delete(); // Delete the image record from the database
            }
        
            // Delete the achievement
            $achievement->delete();
        
            // Redirect back with success message
            return back()->with('success', 'Gallery and associated images deleted successfully.');
        }

        public function deleteimage($id){
            $file = AchievementImages::findOrFail($id);
            
            // Check if the file exists and delete it
            $filePath = public_path('achievement/' . $file->filename);
            if (FileSystem::exists($filePath)) {
                FileSystem::delete($filePath);
            }
        
            // Delete the file record from the database
            $file->delete();
        
            // Redirect back to the previous page
            return back()->with('success', 'File deleted successfully.');
        }
        

        public function edit($id)
        {
            // Fetch the gallery by ID
            $achievement = Achievement::findOrFail($id);
            
            return view('achievement.edit_achievement', compact('achievement'));
        }

        public function update_gallery(Request $request, $id)
        {
            // Validate the request data
            $validated = $request->validate([
                'title' => 'required|max:255',
                'date' => 'nullable',
                'place' => 'nullable',
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif', // Validate image upload
            ]);

            // Fetch the gallery by ID
            $gallery = Achievement::findOrFail($id);
            // dd($gallery);
            
            // Update the gallery title
            $gallery->title = $request->title;
            $gallery->date = $request->date;
            $gallery->place = $request->place;
            $gallery->slug = Str::slug($request->input('title')); // Generate slug

            // Check if a new thumbnail is uploaded
            if ($request->hasFile('thumbnail')) {
                // Store the uploaded image
                $imageName = time() . '.' . $request->thumbnail->getClientOriginalExtension();
                $request->thumbnail->move(public_path('achievement'), $imageName);
                
                // Update the thumbnail filename
                $gallery->thumbnail = $imageName;
            }

            // Save the changes
            $gallery->save();

            // Redirect back to the gallery list with a success message
            return redirect('achievement/list')->with('success', 'Gallery updated successfully');
        }


        
        public function add_imagess(Request $request, $achievement_id)
        {
            // Fetch the gallery by ID
            $achievement = Achievement::findOrFail($achievement_id);
        
            // Fetch all achievement
            if ($request->isMethod('post')) {
                // Validate the request data
                $validated = $request->validate([
                    'achievement_id' => 'required|exists:achievements,id',
                    'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validate image uploads
                ]);
        
                // Get gallery ID
                $achievementId = $request->input('achievement_id');
        
                // Upload and save each image
                if ($request->hasFile("images")) {
                    foreach ($request->file("images") as $file) {
                        $imageName = time() . '_' . $file->getClientOriginalName();
                        $file->move(public_path("/achievement"), $imageName);
        
                        // Create image record associated with the gallery
                        AchievementImages::create([
                            'achievement_id' => $achievementId,
                            'filename' => $imageName,
                            // Other image attributes can be added here if needed
                        ]);
                    }
                }
        
                return redirect('achievement/achievements/list2')->with('success', 'Images uploaded successfully');
            }
        
            return view('achievement.add_imagess', compact('achievement'));
        }


        public function list2()
        {
         
            $achievements = Achievement::all();

            return view('achievement.list2', ['achievements' => $achievements]);
        }



        public function editt($achievement_id, Request $request)
        {
            $achievement = Achievement::findOrFail($achievement_id);
            $existingImages = AchievementImages::where('achievement_id', $achievement_id)->get();
        
            if ($request->isMethod('POST')) {
                $validated = $request->validate([
                    'images.*' => 'mimes:jpeg,png,jpg,gif',
                ]);
        
                // Handle file uploads
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $file) {
                        // Determine the destination path
                        $destination_path = public_path('achievement');
        
                        // Generate a unique filename
                        $filename = time() . '_' . $file->getClientOriginalName();
        
                        // Move the file to the destination path
                        $file->move($destination_path, $filename);
        
                        // Create a new image record and associate it with the achievement
                        AchievementImages::create([
                            'achievement_id' => $achievement_id,
                            'filename' => $filename,
                        ]);
                    }
                }
        
                // Redirect back to the edit page with a success message
                return redirect()->route('achievement.list2', ['achievement_id' => $achievement_id])->with('success', 'Images updated successfully');
            }
        
            return view('achievement.editt', ['achievement' => $achievement, 'existingImages' => $existingImages]);
        }
        

      
}
