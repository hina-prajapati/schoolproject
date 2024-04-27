<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileSystem;

class EventController extends Controller
{

    public function event_add(Request $request)
{
    if ($request->isMethod('post')) {
        $validated = $request->validate([
            'title' => 'nullable|max:255',
            'short_description' => 'nullable',
            'long_description' => 'nullable',
            'date' => 'nullable|date',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'start_time' => 'nullable',
            'start_time_period' => 'nullable',
            'end_time' => 'nullable',
            'job_description' => 'nullable',
            'address' => 'nullable',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed
            'end_time_period' => 'nullable',
            'filename.*' => 'nullable|mimes:pdf,jpg,jpeg,png,doc,docx,zip',
        ]);

        // $event = new Event;
        // $event->date = $request->date;
        // $event->start_date = $request->start_date;
        // $event->end_date = $request->end_date;
        // $event->start_time = $request->start_time . ' ' . strtoupper($request->start_time_period);
        // $event->end_time = $request->end_time . ' ' . strtoupper($request->end_time_period);
        // $event->title = $request->title;
        // $event->short_description = $request->short_description;
        // $event->long_description = $request->long_description;
        // dd($event);
        // $event->save();

            $event = new Event;
            $event->date = $request->date;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->start_time = $request->start_time;
            $event->address = $request->address;
            $event->end_time = $request->end_time;
            $event->start_time_period = $request->start_time_period;
            $event->end_time_period = $request->end_time_period;
            $event->title = $request->title;
            $event->short_description = $request->short_description;
            $event->long_description = $request->long_description;
            $event->job_description = $request->job_description;

            $event->save();


    
            $eventId = $event->id;
            $postId = $event->id;

            if ($request->hasFile('thumbnail')) {
                $image = $request->file('thumbnail');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $path = $request->file('thumbnail')->move('single_events', $imageName); // Adjust storage path as needed
            
                // Save only the image filename to the database
                $event->thumbnail = $imageName;
                $event->save();
            }
            
    
            if ($request->hasFile('filename')) {
                foreach ($request->file('filename') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = $file->getClientOriginalName();
    
                    $destinationPath = public_path('files');
    
                    $file->move($destinationPath, $filename);
    
                    $newFile = new File();
                    $newFile->filename = $filename;
                    // $newFile->post_id = $postId;
                    $newFile->event_id = $eventId; 
                    $newFile->save();
                }
            }
    
            return redirect('/events/event_list')->with('success', 'Event Added Successfully');
        }
    
        return view('events.event_add');
    }
    



    public function event_list()
    {
        $events = Event::all(); // Assuming 'Event' is your model for events
    // dd($events);
        return view('events.event_list', ['events' => $events]);
    }
    
        

        // public function show($postId)
        // {
        //     $files = File::where('post_id', $postId)->get();
        //     $post = Event::findOrFail($postId); // Fetch the post associated with $postId
        
        //     return view('post.post_list', ['post' => $post, 'files' => $files]);
        // }
        
       
        

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
      

        public function event_edit($id, Request $request)
        {
            if ($request->method() == 'POST') {
                $validated = $request->validate([
                'date' => 'nullable',
                    'title' => 'nullable|max:255',
                    'short_description' => 'nullable',
                    'long_description' => 'nullable',
                    'job_description' => 'nullable',
                    'date' => 'nullable|date',
                    'start_date' => 'nullable|date',
                    'end_date' => 'nullable|date',
                    'start_time' => 'nullable',
                    'start_time_period' => 'nullable',
                    'address' => 'nullable',
                    'end_time' => 'nullable',
                    'end_time_period' => 'nullable',
                ]);

                $data = Event::findOrFail($id);
                $oldThumbnailPath = public_path('single_events/' . $data->thumbnail);

                // Handle file uploads
                if ($request->hasFile('filename')) {
                    foreach ($request->file('filename') as $file) {
                        // Determine the file extension
                        $extension = $file->getClientOriginalExtension();
                
                        // Generate a unique filename
                        $filename = time() . '_' . $file->getClientOriginalName();
                
                        // Determine the destination path based on the file extension
                        $destination_path = public_path('files');
                
                        // Move the file to the destination path
                        $file->move($destination_path, $filename);
                
                        // Create a new file record and associate it with the event
                        $newFile = new File();
                        $newFile->filename = $filename;
                        $newFile->event_id = $data->id; // Associate with the event
                        // $newFile->post_id = $data->id; // Associate with the event
                        $newFile->save();
                    }
                }
               // Check if a new thumbnail has been uploaded
                    if ($request->hasFile('thumbnail')) {
                        // Delete the old thumbnail image if it exists
                        if (file_exists($oldThumbnailPath)) {
                            unlink($oldThumbnailPath);
                        }

                        // Upload and save the new thumbnail image
                        $image = $request->file('thumbnail');
                        $imageName = time().'.'.$image->getClientOriginalExtension();
                        $path = $request->file('thumbnail')->move('single_events', $imageName);
                        // Save only the image filename to the database
                        $data->thumbnail = $imageName;
                    }

                // Save the updated event
                $data->save();
                    
                $baseSlug = Str::slug($request->title); // Initial slug based on the title
                $slug = $baseSlug;
                $count = 1;

                // Keep appending a number until the slug is unique
                while (Event::where('slug', $slug)->where('id', '!=', $data->id)->exists()) { // Ensure we exclude current event from check
                    $slug = $baseSlug . '-' . $count;
                    $count++;
                }

                // Update event details
                $data->update([
                    'date' => $request->date,
                    'title' => $request->title,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'slug' => $slug, // Use the generated unique slug
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                    'address' => $request->address,
                    'job_description' => $request->job_description,        
                    'start_time_period' => $request->start_time_period,
                    'end_time_period' => $request->end_time_period,
                    'short_description' => $request->short_description,
                    'long_description' => $request->long_description,
                   

                ]);
                
                // Redirect to the event list page with a success message
                return redirect('/events/event_list')->with('success', 'Event updated successfully');
            }        
            $data = Event::findOrFail($id)->toArray();
            $existingFiles = File::where('event_id', $id)->get()->groupBy('event_id');
            return view('events.event_edit', ['data' => $data, 'existingFiles' => $existingFiles]);
        }


        public function event_delete($id)
        {
            // Find the event by ID
            $event = Event::findOrFail($id);

            // Delete associated files
            $files = File::where('event_id', $event->id)->get();
            foreach ($files as $file) {
                $filePath = public_path("files/" . $file->filename);
                if (FileSystem::exists($filePath)) {
                    FileSystem::delete($filePath);
                }
                $file->delete(); // Delete the file record from the database
            }

            // Delete the event
            $event->delete();

            // Redirect back with success message
            return back()->with('success', 'Event and associated files deleted successfully.');
        }


        public function showEvent($slug)
        {
            $event = Event::where('slug', $slug)->firstOrFail();
            
            return view('pages.event', ['event' => $event]);
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

        public function allEvents()
        {
            $today = now(); // Get the current date and time
            $events = Event::where('end_date', '<', $today)->paginate(6); // Fetch events that have ended
            // $upcomingEvents = Event::where('end_date', '>', now())
            // ->where('start_date', '<=', now())
            // ->paginate(10);

            // Fetch upcoming events with pagination
            // $upcomingEvents = Event::where('end_date', '>', now())
            // ->where('start_date', '<=', now())
            // ->paginate(10);
            $upcomingEvents = Event::where('end_date', '>', now())
            ->where('start_date', '<=', now())
            ->get();



            return view('pages.all-events', ['events' => $events, 'upcomingEvents' => $upcomingEvents]);
        }
        // public function allEvents()
        // {
        //     $today = now(); // Get the current date and time
        
        //    // Fetch events that have ended (including end date and end time)
        //     $events = Event::where(function ($query) use ($today) {
        //         $query->where('end_date', '<', $today->toDateString())
        //             ->orWhere(function ($subQuery) use ($today) {
        //                     $subQuery->where('end_date', '=', $today->toDateString())
        //                             ->where('end_time', '<', $today->format('H:i:s'));
        //             });
        //     })
        //     ->paginate(6);
        
        //     // Fetch upcoming events based on start date, start time, end date, and end time
        //     $upcomingEvents = Event::where('end_date', '>=', $today) // Events that haven't ended yet
        //         ->where(function ($query) use ($today) {
        //             $query->where('start_date', '>=', $today->format('Y-m-d')) // Events starting today or later
        //                 ->orWhere(function ($subQuery) use ($today) {
        //                     $subQuery->where('start_date', $today->format('Y-m-d')) // Events starting today
        //                         ->where(function ($q) use ($today) {
        //                             $q->where('start_time', '>', $today->format('H:i:s')) // Events with start time after current time
        //                                 ->orWhere(function ($innerSubQuery) use ($today) {
        //                                     $innerSubQuery->where('start_time', $today->format('H:i:s')) // Events with start time equal to current time
        //                                         ->where('start_time_period', 'AM'); // Ensure AM for current time
        //                                 });
        //                         });
        //                 });
        //         })
        //         ->where(function ($query) use ($today) {
        //             $query->where('end_date', '>', $today->format('Y-m-d')) // Events ending today or later
        //                 ->orWhere(function ($subQuery) use ($today) {
        //                     $subQuery->where('end_date', $today->format('Y-m-d')) // Events ending today
        //                         ->where(function ($q) use ($today) {
        //                             $q->where('end_time', '>', $today->format('H:i:s')) // Events with end time after current time
        //                                 ->orWhere(function ($innerSubQuery) use ($today) {
        //                                     $innerSubQuery->where('end_time', $today->format('H:i:s')) // Events with end time equal to current time
        //                                         ->where('end_time_period', 'AM'); // Ensure AM for current time
        //                                 });
        //                         });
        //                 });
        //         })
        //         ->get();
        
        //     return view('pages.all-events', ['events' => $events, 'upcomingEvents' => $upcomingEvents]);
        // }
        
    
        // public function allEvents()
        // {
        //     $today = now();
        
        //     // Paginate past events.
        //     $events = Event::where('end_date', '<', $today)->paginate(4);
        
        //     // Get upcoming events without pagination.
        //     $upcomingEvents = Event::where('start_date', '>', now())->orderBy('start_date', 'asc')->get();
        
        //     // Pass both past and upcoming events to the view.
        //     return view('pages.all-events', [
        //         'events' => $events,
        //         'upcomingEvents' => $upcomingEvents,
        //     ]);
        // }
        
}
