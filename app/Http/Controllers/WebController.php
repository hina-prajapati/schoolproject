<?php

namespace App\Http\Controllers;

use App\Models\Pta;
use App\Models\Post;
use App\Models\About;
use App\Models\Event;
use App\Models\Image;
use App\Models\Banner;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Admission;
use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Models\BulletinBoard;
use Illuminate\Support\Carbon;



class WebController extends Controller
{

    
    public function adminfun() {
        $totalNotices = Notice::count();
        // Today's notice count
        $todayCount = Notice::whereDate('created_at', Carbon::today())->count();
    
        // This month's notice count
        $thisMonthCount = Notice::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();
    

        // This year's notice count
        $thisYearCount = Notice::whereYear('created_at', Carbon::now()->year)->count();

         $totalEventsCount = Event::count();
        // Fetch count of upcoming events
        $upcomingCount = Event::where('end_date', '>', now()->toDateString())
        ->where('start_date', '<=', now()->toDateString())
        ->count();
        
        $today = now(); // Get the current date and time
        $pastCount = Event::where('end_date', '<', $today)->count(); // Fetch events that have ended
    

        // dd($pastCount);

                return view('admin.index', compact('todayCount', 'thisMonthCount', 
                'thisYearCount', 'totalNotices',
                 'totalEventsCount', 'upcomingCount', 'pastCount'));
            }


    public function getTodayCount()
    {
        // Get the count of notices posted today
        $todayCount = Notice::whereDate('created_at', Carbon::today())->count();

        // Return the count
        return $todayCount;
    }

    public function profiles(){

        return view('profile');
    }

    // public function showEvent($slug)
    // {
    //     $event = Post::where('slug', $slug)->firstOrFail();
    //     // dd($event);

    //     return view('event', $event);
    // }

    public function home($slug = null){
        
        $data['homeabout'] = Post::where('section_id',4)->get();
        $data['homebanner'] = Post::where('section_id',6)->get();
        $data['homeNoticImage'] = Post::where('section_id',7)->get();
        $data['homeNoticfirst'] = Post::where('section_id',8)->get();
        $data['noticesecond'] = Post::where('section_id',9)->get();
        $data['homenotice1'] = Post::where('section_id',12)->get();
        $data['noticethird'] = Post::where('section_id',10)->get();

        $data['banners'] = Banner::all();
    
        // dd($data);
 
        // if ($slug) {
        //     $data['event'] = Post::where('slug', $slug)
        //                             ->where('section_id', 14)
        //                             ->get();
        // } else {
        //     $data['events1'] = Post::where('section_id', 14)->get();
        // }
        $data['notices'] = Notice::orderBy('created_at', 'desc')->take(4)->get();
        $data['admissions'] = Admission::orderBy('created_at', 'desc')->get();
        $data['eventss'] = Event::where('end_date', '>', now()->toDateString())
        ->where('start_date', '<=', now()->toDateString())
        ->take(4)
        ->get();
       
        return view('pages.index', $data);
    }
        
    public function about(){
        $data['abouts'] = About::all();
        $data['listabout'] = Post::where('section_id',2)->get();
        $data['aboutbanner'] = Post::where('section_id',3)->get();
        return view('pages.about', $data);
    }


    public function management(){

        return view('pages.management');
    }


    public function principal(){

        return view('pages.principal');
    }


    public function publicDisclosure(){
        return view('pages.public-disclosure');
    }

    public function cbseRegulation(){
        return view('pages.cbse-regulation');
    }

    public function courses(){
        $data['listcourses'] = Post::where('section_id',5)->get();
        return view('pages.courses', $data);
    }

    public function curriculum(){
        return view('pages.curriculum');
    }


    public function coCurriculum(){
        return view('pages.co-curriculum');
    }

    public function bulletinBoard()
    {
        $data['bulletinBoard'] = BulletinBoard::all();
        $data['noticesForOtherPages'] = Notice::orderBy('created_at', 'desc')->paginate(3);
    
        return view('pages.bulletin-board', $data);
    }
    
    


    public function achievement(){
        $data['achievements'] = Achievement::all(); // Fetch all events

        return view('pages.achievement', $data);
    }

    // public function index()
    // {
    //     $galleries = Gallery::all();
        
    //     // Load images for each gallery
    //     foreach ($galleries as $gallery) {
    //         $gallery->images = Image::where('gallery_id', $gallery->id)->get();
    //     }
    
    //     return view('pages.gallery', ['galleries' => $galleries]);
    // }

        public function index()
        {
            // Paginate the galleries instead of loading them all
            $galleries = Gallery::paginate(4); // Adjust the number per page as needed
            
            // Load images for each paginated gallery
            foreach ($galleries as $gallery) {
                // Assuming you want to load all images for now; adjust if needed
                $gallery->images = Image::where('gallery_id', $gallery->id)->get();
            }

            return view('pages.gallery', ['galleries' => $galleries]);
        }

    
    
    
    public function contact(){
        $data['contacts'] = Contact::all();

        return view('pages.contact', $data);
    }

    public function primary(){
        return view('pages.primary');
    }


    public function preprimary(){
        return view('pages.preprimary');
    }

    public function secondary(){
        return view('pages.secondary');
    }


    public function college(){
        return view('pages.college');
    }


    public function pta(){
        $data['ptas'] = Pta::all();
        // dd($data);
        return view('pages.pta', $data);
    }


    public function examdate(){
        $data['examdate'] = Post::where('section_id',11)->get();
        return view('pages.examdate', $data);
    }


    // public function friendshipday(){
    //     $data['friendshipday'] = Post::where('section_id',)->get();
    //     return view('pages.friendshipday', $data);
    // }


    
}
