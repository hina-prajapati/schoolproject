<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Notice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;
  
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class NoticBoardController extends Controller
{
    public function create_notice(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'title' => 'nullable|max:255',
                'short_description' => 'nullable|max:255',
              'job_description' => 'nullable',
                'date' => 'nullable|date',
                'thumbnail' => 'mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed
                'filename.*' => 'nullable|mimes:pdf,jpg,jpeg,png,doc,docx,zip|max:2048',
            ]);
    
            $notice = new Notice;
            $notice->date = $request->date;
            $notice->title = $request->title;
            $notice->job_description = $request->job_description;
            $notice->short_description = $request->short_description;
            $notice->slug = Str::slug($request->title); // Generate slug from title

            $notice->save();
    
            $noticeId = $notice->id;
            // $postId = $notice->id;
    
            if ($request->hasFile('filename')) {
                foreach ($request->file('filename') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = $file->getClientOriginalName();
    
                    $destinationPath = public_path('files');
    
                    $file->move($destinationPath, $filename);
    
                    $newFile = new File();
                    $newFile->filename = $filename;
                 
                    $newFile->notice_id = $noticeId; 
                    $newFile->save();
                }
            }

        
    
            return redirect('/notices/all_notice')->with('success', 'Notice Added Successfully');
        }
    
        return view('notices.create_notice');
    }
    



    public function all_notice()
    {
        $notices = Notice::all(); // Assuming 'Event' is your model for events
    
        return view('notices.all_notice', ['notices' => $notices]);
    }
    
    
        // public function downloadFile($filename)
        // {
        //     // Determine the file directory based on the file extension
        //     $extension = pathinfo($filename, PATHINFO_EXTENSION);
        //     if ($extension === 'pdf') {
        //         $directory = 'files';
        //     } else {
        //         $directory = 'files';
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
      

        public function edit_notice($id, Request $request)
        {
            if ($request->isMethod('POST')) { // Use isMethod() for clarity
                $validated = $request->validate([
                    'date' => 'nullable',
                    'title' => 'nullable|max:255',
                    'short_description' => 'nullable|max:255',
                    'job_description' => 'nullable',
                    'filename.*' => 'nullable|mimes:pdf,jpg,jpeg,png,doc,docx,zip|max:2048', // Validate file uploads
                ]);
        
                $notice = Notice::findOrFail($id);
        
                // Handle file uploads
                if ($request->hasFile('filename')) {
                    foreach ($request->file('filename') as $file) {
                        // Generate a unique filename
                        $filename = time() . '_' . $file->getClientOriginalName();
        
                        // Move the file to the destination path
                        $file->move(public_path('files'), $filename);
        
                        // Create a new file record and associate it with the notice
                        $newFile = new File();
                        $newFile->filename = $filename;
                        $newFile->notice_id = $notice->id; // Associate with the notice
                        $newFile->save();
                    }
                }
        
                // Update notice details
                $notice->update([
                    'date' => $request->date,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title), // Update the slug using Laravel's Str helper
            'slug' => Str::slug($request->input('title')),
            'job_description' => $request->job_description,        
                    'short_description' => $request->short_description,
                ]);
        
                // Redirect to the notice list page with a success message
                return redirect('/notices/all_notice')->with('success', 'Notice updated successfully');
            }
        
            // Fetch notice details and existing files
            $notice = Notice::findOrFail($id);
            $existingFiles = File::where('notice_id', $id)->get()->groupBy('notice_id');
        
            return view('notices.edit_notice', ['notice' => $notice, 'existingFiles' => $existingFiles]);
        }
        



        public function delete_notice($id)
        {
            // Find the notice by ID
            $notice = Notice::findOrFail($id);

            // Delete associated files
            $files = File::where('notice_id', $notice->id)->get();
            foreach ($files as $file) {
                $filePath = public_path("files/" . $file->filename);
                if (FileSystem::exists($filePath)) {
                    FileSystem::delete($filePath);
                }
                $file->delete(); // Delete the file record from the database
            }

            // Delete the notice
            $notice->delete();

            // Redirect back with success message
            return back()->with('success', 'Notice and associated files deleted successfully.');
        }


        public function deleteimage($id){
            $file = File::findOrFail($id);
            
            // Check if the file exists and delete it
            if (FileSystem::exists(public_path('files/' . $file->filename))) {
                FileSystem::delete(public_path('files/' . $file->filename));
            }

            // Delete the file record from the database
            $file->delete();

            // Redirect back to the previous page
            return back()->with('success', 'File deleted successfully.');
        }

        public function showNotice($slug)
        {
            $notice = Notice::where('slug', $slug)->firstOrFail();
            
            return view('pages.notice', ['notice' => $notice]);
        }

        
        public function serveFile($filename)
        {
            $path = public_path('files/' . $filename);
        
            if (!Storage::exists($path)) {
                abort(404);
            }
        
            // Determine the MIME type of the file
            $mime = mime_content_type($path);
        
            // Set the appropriate Content-Type header
            $headers = ['Content-Type' => $mime];
        
            return response()->file($path, $headers);
        }
        
}
