<?php

use App\Models\User;
use App\Models\AnimeKu;
use App\Models\Commant;
use App\Models\Episode;
use App\Models\Wishlist;
use App\Models\BlogAnime;
use Google\Service\Sheets;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Auth;
use Google\Service\TagManager\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\AnimeKuController;
use App\Http\Controllers\CommantController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\BlogAnimeController;
use App\Http\Controllers\List_AnimeKu_Controller;
use App\Http\Controllers\Episode_anime_Controller;

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
    $animeku = AnimeKu::all();

    // return $animeku;
    return view('welcome', compact('animeku'));
})->name('home');

Route::get('/category', function () {
    $animeku_list = AnimeKu::all();
    
    return view('anim_category/category/category', compact('animeku_list'));
});

Route::get('/anim_detail', function () {
    
    return view('anim_category/category/anim_detail');
});

Route::get('/anim_watch', function () {
    return view('anim_category/category/anim_watch');
});

Route::get('/anim_blog', function () {
    $bloganimeku = BlogAnime::all();
    $blogcommant = AnimeKu::all();

    
    return view('anim_category/category/anim_blog', compact('bloganimeku', 'blogcommant'));
})->name('anim_blog');






Route::get('/create_user', function () {
    return view('admin_master/side_admin/Add_User');
})->name('create_user');



Route::get('/AnimeKu_list', function () {
    $animeku=AnimeKu::orderBy('judul','desc')->simplePaginate(3);
    
    return view('admin_master.side_admin.AnimeKu_show', compact('animeku'));
})->name('AnimeKu_list');

Route::get('/AnimeKu_detail/{id}', function (string $id) {
    $animeku= AnimeKu::findOrFail($id);
    $animeku_episode= AnimeKu ::all();
    $allanime= AnimeKu::count();

    
    return view('anim_category.category.anim_detail', compact('animeku', 'allanime', 'animeku_episode'));
})->name('AnimeKu_detail');



Route::get('/profil', function () {
    return view('admin_master/user_admin/Myprofile');
})->name('profil');

Route::get('/profil_edit', function () {
    return view('admin_master/user_admin/Myprofile');
})->name('admin.user.Myprofile');


Route::get('/dashboard', function () {
     $total_user = User::count();
     $total_anime = AnimeKu::count();
     $total_wishlist = Wishlist::where('user_id', Auth::id())->count();
    return view('admin_master.index', compact('total_user','total_anime', 'total_wishlist'));
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/animeku/{id}', 'AnimeKuController@show')->name('AnimeKu.show');
    Route::get('/Wishlist.detail', [WishlistController::class, 'show'])->name('Wishlist_detail');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::delete('/delete/{id}', [UserController::class,"destroy"])->name('delate.destroy');

Route::get('/episode_anime/{id}', function (string $id) {
    $animeku = AnimeKu::findOrFail($id);
    $allAnime = AnimeKu::all();
    // return $episode;
    return view('admin_master.side_admin.episode_anime', compact('animeku','allAnime'));
})->name('episode_anime');



Route::get('/List_AnimeKu', [List_AnimeKu_Controller::class,"index"])->name('list_anime'); // halaman create anime
Route::get('/AnimeKuCreate', [AnimeKuController::class,"create"])->name('AnimeKuCreate'); // halaman create anime saja


Route::get('/AnimeKu', [AnimeKuController::class,"index"])->name('AnimeKu.index'); // halaman create anime
Route::post('/AnimeKu', [AnimeKuController::class,"store"])->name('AnimeKu.store');
Route::get('/AnimeKu/{id}', [AnimeKuController::class,"show"])->name('AnimeKu.show');
Route::get('/AnimeKu/{id}/edit', [AnimeKuController::class,"edit"])->name('AnimeKu.edit');
Route::patch('/episode_update/{id}', [AnimeKuController::class, 'update'])->name('episode_update');
Route::delete('/AnimeKu/{id}', [AnimeKuController::class,"destroy"])->name('AnimeKu.destroy');

// Route::get('admin_master/user_admin/Myprofile', 'App\Http\Controllers\ProfileController')->name('admin.user.Myprofile');


// Route::resource('AnimeKu','App\Http\Controllers\AnimeKuController');
Route::resource('Profile','App\Http\Controllers\ProfileController');
Route::resource('Users','App\Http\Controllers\UserController');
Route::resource('episode','App\Http\Controllers\Episode_anime_Controller');
Route::resource('wishlist','App\Http\Controllers\WishlistController');
Route::resource('cetak','App\Http\Controllers\CetakController');
Route::resource('bloganime','App\Http\Controllers\BlogAnimeController');
Route::resource('commants','App\Http\Controllers\CommantController');
Route::resource('Poto','App\Http\Controllers\PictureController')->parameters(['Poto'  => 'user']);


// cetak laporan
Route::get('cetak_pdf', [CetakController::class,"cetakPDF"])->name('cetak_pdf');
Route::get('cetak_word', [CetakController::class, "cetakWord"])->name('cetak_word');



Route::get('cetakPDFanime', [CetakController::class, "cetakPDFanime"])->name('cetakPDFanime');


Route::get('/cetak_animeku', function () {
    $animeku = AnimeKu::orderBy('judul', 'asc')->get();
    
    return view('report_animeku.index', compact('animeku'));
})->name('cetak_animeku');


// wishlist user 
Route::get('/wishlist_user/{id}', function (string $id) {

    
    $allwishlist = Wishlist::all();
    // return $episode;
    return view('admin_master.user_admin.wishlist_user', compact('wishlist','allwishlist'));
})->name('wishlist_user');

Route::get('/wishlist_alluser', function () {

    
    $wishlist = Wishlist::whereHas('user', function ($query) {
        return $query->where('id', auth()->id());
    })->paginate(10);
   // return $episode;
   
   return view('admin_master.user_admin.wishlist_user', compact('wishlist'));
})->name('wishlist_alluser');
Route::delete('/delete/{id}', [WishlistController::class,"destroy"])->name('delate.destroy');


// create blog anime coming soon
Route::get('/list_blog_anime', function () {
    $listblog = BlogAnime::all();
    
    return view('admin_master.side_admin.blog_anime_create', compact('listblog'));
})->name('list_blog_anime');
Route::get('/anime_coming_soon', [BlogAnimeController::class,"create"])->name('anime_coming_soon'); // halaman create anime saja



// commants create
Route::post('/commants_create/{id}', [CommantController::class,"store"])->name('commants_create'); // halaman create anime saja


//anime manga episode cetak 
Route::get('/manga_mu/{id}', function (string $id) {
    $animeku=AnimeKu::findOrFail($id);
    $animeku_manga=AnimeKu::all();
    // $allanime=AnimeKu::count();

    return view('anim_category.animeku_manga_cetak.animeku_manga', compact('animeku', 'animeku_manga'));
})->name('manga_mu');









require __DIR__.'/auth.php';