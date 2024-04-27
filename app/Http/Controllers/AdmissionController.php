<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Admission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class AdmissionController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'title' => 'nullable|max:255',
                'short_description' => 'nullable',
                'long_description' => 'nullable',
                'date' => 'nullable|date',
                'job_description' => 'nullable',
                'editor' => 'nullable',
                'thumbnail' => 'mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed
                'filename.*' => 'nullable|mimes:pdf,jpg,jpeg,png,doc,docx,zip',
            ]);
    
            $admission = new Admission();
            $admission->date = $request->date;
            $admission->job_description = $request->job_description;
            $admission->title = $request->title;
            $admission->slug = Str::slug($request->title); // Generate slug from title
            $admission->short_description = $request->short_description;
            $admission->long_description = $request->long_description;
            // $admission->editor = $request->editor;
            $admission->save();
    
            $admissionId = $admission->id;
         
            if ($request->hasFile('filename')) {
                foreach ($request->file('filename') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = $file->getClientOriginalName();
    
                    $destinationPath = public_path('admission');
    
                    $file->move($destinationPath, $filename);
    
                    $newFile = new File();
                    $newFile->filename = $filename;
                    // $newFile->post_id = $postId;
                    $newFile->admission_id = $admissionId; 
                    $newFile->save();
                }
            }

         
            if($request->hasFile('thumbnail')){
                $image = $request->file('thumbnail');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $path = $request->file('thumbnail')->move('singleImageAdmission', $imageName);
                $admission->thumbnail = $imageName;
                $admission->save();
               }

            return redirect('/addmissionNotice/list')->with('success', 'Event Added Successfully');
        
        }
        return view('addmissionNotice.add');
    }

        public function list()
        {
            $admissions = Admission::all(); // Assuming 'Event' is your model for events
        
            return view('addmissionNotice.list', ['admissions' => $admissions]);
        }

   

        public function showadmission($slug)
        {
            $admission = Admission::where('slug', $slug)->firstOrFail();
            
            return view('pages.admission', ['admission' => $admission]);
        }
        
        
        public function delete($id)
        {
            $event = Admission::findOrFail($id);
            if (FileSystem::exists("singleImageAdmission/".$event->thumbnail)) {
                FileSystem::delete("singleImageAdmission/".$event->thumbnail);
            }
          
           
            $files = File::where('admission_id', $event->id)->get();
            foreach ($files as $file) {
                $filePath = public_path("admission/" . $file->filename);
                if (FileSystem::exists($filePath)) {
                    FileSystem::delete($filePath);
                }
                $file->delete(); 
            }
            $event->delete();
            return back()->with('success', 'Event and associated files deleted successfully.');
        }


        // public function downloadFile($filename)
        // {
        //     // Determine the file directory based on the file extension
        //     $extension = pathinfo($filename, PATHINFO_EXTENSION);
        //     if ($extension === 'pdf') {
        //         $directory = 'admission';
        //     } else {
        //         $directory = 'admission';
        //     }

        //     // Construct the full file path
        //     $filePath = public_path($directory . '/' . $filename);

        //     // Check if the file exists
        //     if (!file_exists($filePath)) {
        //         abort(404);
        //     }

        //     // Return the file as a response to trigger the download
        //     return response()->download($filePath, $filename);
        // }
        public function edit($id, Request $request)
        {
            $admission = Admission::findOrFail($id);
            
            if ($request->isMethod('post')) {
                $validated = $request->validate([
                    'date' => 'nullable',
                    'title' => 'nullable|max:255',
                    'short_description' => 'nullable',
                    'long_description' => 'nullable',
                    'job_description' => 'nullable',
                ]);

                if($request->hasFile("thumbnail")){
                    if (FileSystem::exists("singleImageAdmission/".$admission->thumbnail)) {
                        FileSystem::delete("singleImageAdmission/".$admission->thumbnail);
                    }
                    $file=$request->file("thumbnail");
                    $admission->thumbnail=time()."_".$file->getClientOriginalName();
                    $file->move('singleImageAdmission',$admission->thumbnail);
                    $request['thumbnail']=$admission->thumbnail;
                }
                // Update admission details
                $admission->update([
                    'date' => $request->date,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title), // Update the slug using Laravel's Str helper
                    'short_description' => $request->short_description,
                    'long_description' => $request->long_description,
                    'job_description' => $request->job_description,    
                        "thumbnail"=>$admission->thumbnail,
                  
                        ]);

                        

        
                // Handle file uploads
                if ($request->hasFile('filename')) {
                    foreach ($request->file('filename') as $file) {
                        // Determine the file extension
                        $extension = $file->getClientOriginalExtension();
                
                        // Generate a unique filename
                        $filename = time() . '_' . $file->getClientOriginalName();
                
                        // Determine the destination path based on the file extension
                        $destination_path = public_path('admission');
                
                        // Move the file to the destination path
                        $file->move($destination_path, $filename);
                
                        // Create a new file record and associate it with the admission
                        $newFile = new File();
                        $newFile->filename = $filename;
                        $newFile->admission_id = $admission->id; // Associate with the admission
                        $newFile->save();
                    }
                }
        
                // Redirect to the admission list page with a success message
                return redirect('/addmissionNotice/list')->with('success', 'Admission updated successfully');
            }
        
            $existingFiles = File::where('admission_id', $id)->get()->groupBy('admission_id');
            return view('addmissionNotice.edit', ['admission' => $admission, 'existingFiles' => $existingFiles]);
        }
        


    public function deleteimage($id){
        $file = File::findOrFail($id);
        
        // Check if the file exists and delete it
        if (FileSystem::exists(public_path('admission/' . $file->filename))) {
            FileSystem::delete(public_path('admission/' . $file->filename));
        }

        // Delete the file record from the database
        $file->delete();

        // Redirect back to the previous page
        return back()->with('success', 'File deleted successfully.');
    }


public function servePDF($filename)
{
    $path = public_path('admission/' . $filename);
    
    if (!Storage::exists($path)) {
        abort(404);
    }

    return response()->file($path, ['Content-Disposition' => 'inline']);
}



}
