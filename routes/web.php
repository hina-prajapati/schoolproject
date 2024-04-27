<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BulletinBoardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NoticBoardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PosttypeController;
use App\Http\Controllers\PtaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/dashboard', [WebController::class, 'adminfun'])->name('/dashboard');
Route::any('/profile', [WebController::class, 'profiles'])->name('/profile');


Route::get('/', [WebController::class, 'home'])->name('home');

Route::any('/pages/gallery', [WebController::class, 'index'])->name('pages.gallery');


Route::any('/about', [WebController::class, 'about'])->name('/about');
Route::any('/management', [WebController::class, 'management'])->name('/management');
Route::any('/principal', [WebController::class, 'principal'])->name('/principal');
Route::any('/public-disclosure', [WebController::class, 'publicDisclosure'])->name('/public-disclosure');
Route::any('/cbse-regulation', [WebController::class, 'cbseRegulation'])->name('/cbse-regulation');
Route::any('/courses', [WebController::class, 'courses'])->name('/courses');
Route::any('/curriculum', [WebController::class, 'curriculum'])->name('/curriculum');
Route::any('/co-curriculum', [WebController::class, 'coCurriculum'])->name('/co-curriculum');
Route::any('/bulletin-board', [WebController::class, 'bulletinBoard'])->name('/bulletin-board');
Route::any('/pages/achievement', [WebController::class, 'achievement'])->name('/pages/achievement');
Route::any('/pages/pta', [WebController::class, 'pta'])->name('/pages/pta');

Route::any('/primary', [WebController::class, 'primary'])->name('/primary');
Route::any('/primary', [WebController::class, 'primary'])->name('/primary');
Route::any('/preprimary', [WebController::class, 'preprimary'])->name('/preprimary');
Route::any('/secondary', [WebController::class, 'secondary'])->name('/secondary');
Route::any('/college', [WebController::class, 'college'])->name('/college');
Route::any('/contact', [WebController::class, 'contact'])->name('/contact');
Route::any('/examdate', [WebController::class, 'examdate'])->name('/examdate');

// Route::any('/posttype/posttype_add', [PosttypeController::class, 'posttype_add']);
// Route::any('/posttype/posttype_list', [PosttypeController::class, 'posttype_list']);
// Route::any('/posttype/posttype_edit/{id}', [PosttypeController::class, 'posttype_edit'])->name('/posttype/posttype_edit');
// Route::any('/posttype/posttype_delete/{id}', [PosttypeController::class, 'posttype_delete'])->name('/posttype/posttype_delete');

// Route::get('/files/{filename}', [PostController::class, 'downloadFile'])->name('file.download');
// Route::any('/post/post_add', [PostController::class, 'post_add']);
// Route::any('/post/post_list', [PostController::class, 'post_list']);
// Route::any('/post/post_edit/{id}', [PostController::class, 'post_edit'])->name('/post/post_edit');
// Route::any('/post/post_delete/{id}', [PostController::class, 'post_delete'])->name('/post/post_delete');

// Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete');
// Route::get('post/post_list/{postId}', [PostController::class, 'show'])->name('/post/post_list');
// // Route::get('/post/post_edit/{id}', [PostController::class, 'edit'])->name('/post/post_edit');
// // Route::get('/delete-file/{id}', [PostController::class, 'delete'])->name('delete.file');
// Route::get('/deleteimage/{id}', [PostController::class, 'deleteimage'])->name('deleteimage');



Route::get('/event/{slug}', [EventController::class, 'showEvent'])->name('event');
Route::any('/events/event_add', [EventController::class, 'event_add']);
Route::any('/events/event_list', [EventController::class, 'event_list']);
Route::any('/events/event_edit/{id}', [EventController::class, 'event_edit'])->name('/events/event_edit');
Route::any('/events/event_delete/{id}', [EventController::class, 'event_delete'])->name('events.event_delete');
Route::get('/deleteimage/{id}', [EventController::class, 'deleteimage'])->name('deleteimage');
// Add this inside the web.php file
Route::get('/pages/all-events', [EventController::class, 'allEvents'])->name('pages.all-events');
// Route::get('/pages/all-events', [EventController::class, 'index'])->name('pages.all-events');






Route::any('/notices/create_notice', [NoticBoardController::class, 'create_notice']);
Route::any('/notices/all_notice', [NoticBoardController::class, 'all_notice']);
Route::any('/notices/edit_notice/{id}', [NoticBoardController::class, 'edit_notice'])->name('notices.edit_notice');
Route::any('/notices/delete_notice/{id}', [NoticBoardController::class, 'delete_notice'])->name('notices.delete_notice');
Route::delete('/deleteimage/{id}', [NoticBoardController::class, 'deleteimage'])->name('deleteimage');
Route::get('/notice/{slug}', [NoticBoardController::class, 'showNotice'])->name('notice');
Route::get('/files/{filename}', [NoticBoardController::class, 'downloadFile'])->name('file.download');
Route::get('/files/{filename}', [NoticBoardController::class, 'serveFile'])->name('file.serveFile');

Route::any('/gallery/add_images', [GalleryController::class, 'add_images']);
Route::get('/gallery/list_images', [GalleryController::class, 'list_image'])->name('list_images');
Route::any('/gallery/gallery_delete/{id}', [GalleryController::class, 'gallery_delete'])->name('gallery.gallery_delete');
Route::get('/pages/gallery/{gallery_id}', [GalleryController::class, 'show'])->name('gallery.show');
Route::any('/gallery/upload/{gallery_id}', [GalleryController::class, 'upload'])->name('gallery.upload');


Route::any('/gallery/add_imagess/{gallery_id}', [GalleryController::class, 'add_imagess'])->name('gallery.add_imagess');
Route::get('/gallery/list_imagess', [GalleryController::class, 'list_images'])->name('gallery.list_imagess');
Route::get('/gallery/{gallery_id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::delete('/deleteimage/{id}', [GalleryController::class, 'deleteimage'])->name('deleteimage');

Route::any('/gallery/edit/{gallery_id}', [GalleryController::class, 'edit'])->name('gallery.edit');
// Route::any('/gallery/edit_gallery/{id}', [GalleryController::class, 'edit_gallery'])->name('gallery.edit_gallery');
Route::get('/gallery/edit_gallery/{id}', [GalleryController::class, 'edit_gallery'])->name('gallery.edit_gallery');
Route::put('/gallery/update/{id}', [GalleryController::class, 'update_gallery'])->name('gallery.update');




Route::get('/bulletinboards/create',function(){
return view('bulletinboards.create');
});

Route::post('/post',[BulletinBoardController::class,'store']);
Route::get('/bulletinboards/list',[BulletinBoardController::class,'index'])->name('/bulletinboards/list');
Route::get('/bulletinboards/edit/{id}',[BulletinBoardController::class,'edit'])->name('bulletinboards.edit');
Route::put('/update/{id}',[BulletinBoardController::class,'update']);
Route::delete('/delete/{id}',[BulletinBoardController::class,'destroy']);



Route::get('/files/{filename}', [AdmissionController::class, 'downloadFile'])->name('file.download');
Route::get('/pages/admission/{slug}', [AdmissionController::class, 'showadmission'])->name('pages.admission');
Route::any('/addmissionNotice/add', [AdmissionController::class, 'add'])->name('addmissionNotice.add');
Route::any('/addmissionNotice/list', [AdmissionController::class, 'list']);
Route::any('/addmissionNotice/edit/{id}', [AdmissionController::class, 'edit'])->name('/addmissionNotice/edit');
Route::any('/addmissionNotice/delete/{id}', [AdmissionController::class, 'delete'])->name('addmissionNotice.delete');
Route::get('/deleteimage/{id}', [AdmissionController::class, 'deleteimage'])->name('deleteimage');
Route::get('/files/{filename}', [AdmissionController::class, 'downloadFile'])->name('file.download');
Route::get('/admission/download/{filename}', [AdmissionController::class, 'servePDF'])->name('servePDF');



Route::any('/achievement/add', [AchievementController::class, 'add']);
Route::get('/achievement/list', [AchievementController::class, 'list'])->name('list');
Route::any('/achievement/delete/{id}', [AchievementController::class, 'delete'])->name('achievement.delete');
Route::get('/achievement/{achievement_id}', [AchievementController::class, 'show'])->name('achievement.show');
Route::any('/achievement/upload/{gallery_id}', [AchievementController::class, 'upload'])->name('achievement.upload');
Route::any('/achievement/edit_achievement/{gallery_id}', [AchievementController::class, 'edit'])->name('achievement.edit_achievement');


Route::any('/achievement/add_imagess/{achievement_id}', [AchievementController::class, 'add_imagess'])->name('achievement.add_imagess');
// Route::get('/achievement/editt/{achievement_id}', [AchievementController::class, 'editt'])->name('achievement.editt');
// Route::any('/achievement/update/{achievement_id}', [AchievementController::class, 'update_achievement'])->name('achievement.update');
Route::get('/achievement/editt/{achievement_id}', [AchievementController::class, 'editt'])->name('achievement.editt');
Route::any('/achievement/editt/{achievement_id}', [AchievementController::class, 'editt']);


Route::get('/deleteimage/{id}', [AchievementController::class, 'deleteimage'])->name('deleteimage');
Route::get('/achievement/{achievement_id}/achievement_delete', [AchievementController::class, 'achievement_delete'])->name('achievement.achievement_delete');


Route::get('/achievement/edit_achievement/{id}', [AchievementController::class, 'edit'])->name('achievement.edit_achievement');
Route::put('/achievement/update/{id}', [AchievementController::class, 'update_gallery'])->name('achievement.update');



Route::get('/achievements/list2', 'App\Http\Controllers\AchievementController@list2')->name('achievement.list2');

Route::get('/bulletinboards/{slug}', [BulletinBoardController::class, 'show'])->name('bulletinboards.show');

Route::get('/bulletinboards/{slug}', [BulletinBoardController::class, 'otherPage'])->name('bulletinboards.show');



// Route::get('/pta/{slug}', [PtaController::class, 'showEvent'])->name('event');
Route::any('/pta/add', [PtaController::class, 'add'])->name('pta.add');
Route::any('/pta/list', [PtaController::class, 'list']);
Route::any('/pta/edit/{id}', [PtaController::class, 'edit'])->name('/pta/edit');
Route::any('/pta/delete/{id}', [PtaController::class, 'delete'])->name('pta.delete');
Route::get('/deleteimage/{id}', [PtaController::class, 'deleteimage'])->name('deleteimage');


Route::any('/banner/add', [BannerController::class, 'add'])->name('banner.add');
Route::any('/banner/list', [BannerController::class, 'list']);
Route::get('/banner/edit-banner/{id}', [BannerController::class, 'edit'])->name('banner.edit-banner');
Route::put('/banner/update/{id}', [BannerController::class, 'update']);
Route::delete('/delete/{id}',[BannerController::class, 'destroy']);


Route::any('/abouts/add', [AboutController::class, 'add'])->name('abouts.add');
Route::any('/abouts/list', [AboutController::class, 'list']);
Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/update/{id}', [AboutController::class, 'update']);
Route::delete('/delete/{id}', [AboutController::class, 'destroy']);


Route::any('/contacts/add', [ContactController::class, 'add'])->name('contacts.add');
Route::any('/contacts/list', [ContactController::class, 'list']);
Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/update/{id}', [ContactController::class, 'update']);
Route::delete('/delete/{id}', [ContactController::class, 'destroy']);


// Define routes for notice counts
Route::get('/notices/today', [WebController::class, 'getTodayCount'])->name('notices.today');
Route::get('/notices/this-month', [WebController::class, 'getThisMonthCount'])->name('notices.this-month');
Route::get('/notices/this-year', [WebController::class, 'getThisYearCount'])->name('notices.this-year');
