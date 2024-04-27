<?php

namespace App\Http\Controllers;

use App\Models\Pta;
use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;

class PtaController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'title' => 'nullable|max:255',
                'short_description' => 'nullable',
                'long_description' => 'nullable',
                'job_description' => 'nullable',
                'date' => 'nullable|date',
                'filename.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx,zip|max:2048', // Adjust max file size as needed
            ]);
    
            $pta = new Pta;
            $pta->date = $request->date;
            $pta->title = $request->title;
            $pta->short_description = $request->short_description;
            $pta->long_description = $request->long_description;
            $pta->job_description = $request->job_description;
            $pta->save();
            $ptaId = $pta->id;
            // dd($ptaId);
    
            if ($request->hasFile('filename')) {
                foreach ($request->file('filename') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = $file->getClientOriginalName();
    
                    $destinationPath = public_path('pta');
    
                    $file->move($destinationPath, $filename);
    
                    $newFile = new File();
                    $newFile->filename = $filename;
                 
                    $newFile->pta_id = $ptaId; 
                    // dd($newFile);
                    
                    $newFile->save();
                }
            }
    
            return redirect('/pta/list')->with('success', 'Event Added Successfully');
        }
    
        return view('pta.add');
    }


    public function list()
    {
        $ptas = Pta::all(); // Assuming 'Event' is your model for pta
    
        return view('pta.list', ['ptas' => $ptas]);
    }

    public function deleteimage($id){
        $file = File::findOrFail($id);
        
        // Check if the file exists and delete it
        if (FileSystem::exists(public_path('pta/' . $file->filename))) {
            FileSystem::delete(public_path('pta/' . $file->filename));
        }

        // Delete the file record from the database
        $file->delete();

        // Redirect back to the previous page
        return back()->with('success', 'File deleted successfully.');
    }




    public function delete($id)
    {
        // Find the event by ID
        $pta = Pta::findOrFail($id);

        // Delete associated files
        $files = File::where('pta_id', $pta->id)->get();
        foreach ($files as $file) {
            $filePath = public_path("pta/" . $file->filename);
            if (FileSystem::exists($filePath)) {
                FileSystem::delete($filePath);
            }
            $file->delete(); // Delete the file record from the database
        }

        // Delete the event
        $pta->delete();

        // Redirect back with success message
        return back()->with('success', 'Event and associated files deleted successfully.');
    }



    public function edit($id, Request $request)
    {
        $pta = Pta::findOrFail($id);
        
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'date' => 'nullable',
                'title' => 'nullable|max:255',
                'short_description' => 'nullable',
                'long_description' => 'nullable',
                'job_description' => 'nullable',
            ]);
    
            // Update admission details
            $pta->update([
                'date' => $request->date,
                'title' => $request->title,
                // 'slug' => Str::slug($request->title), // Update the slug using Laravel's Str helper
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'job_description' => $request->job_description,        
                    ]);
    
            // Handle file uploads
            if ($request->hasFile('filename')) {
                foreach ($request->file('filename') as $file) {
                    // Determine the file extension
                    $extension = $file->getClientOriginalExtension();
            
                    // Generate a unique filename
                    $filename = time() . '_' . $file->getClientOriginalName();
            
                    // Determine the destination path based on the file extension
                    $destination_path = public_path('pta');
            
                    // Move the file to the destination path
                    $file->move($destination_path, $filename);
            
                    // Create a new file record and associate it with the admission
                    $newFile = new File();
                    $newFile->filename = $filename;
                    $newFile->pta_id = $pta->id; // Associate with the admission
                    $newFile->save();
                }
            }
    
            // Redirect to the admission list page with a success message
            return redirect('/pta/list')->with('success', 'Admission updated successfully');
        }
    
        $existingFiles = File::where('pta_id', $id)->get()->groupBy('pta_id');
        return view('pta.edit', ['pta' => $pta, 'existingFiles' => $existingFiles]);
    }
    
    
}
