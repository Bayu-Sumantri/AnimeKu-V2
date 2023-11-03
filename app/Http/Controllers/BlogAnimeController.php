<?php

namespace App\Http\Controllers;

use App\Models\BlogAnime;
use Illuminate\Http\Request;

class BlogAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bloganime = BlogAnime::orderBy('judul', 'asc')->simplePaginate(6);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword) 
        {
            $bloganime = BlogAnime::where('judul', 'LIKE', "%$filterKeyword%")->paginate(3);
        }
        
        return view('admin_master.side_admin.list_blog_anime', compact('bloganime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_master.side_admin.blog_anime_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id'                         =>  ['required'],
            'nama_anime'                      =>  ['required','max:1000'],
            'deskripsi_anime_coming_soon'     =>  ['required','max:1000'],
            'gambar_anime_coming_soon'        =>  'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        // dd($request);

        $images = $request->file('gambar_anime_coming_soon')->store('Poster_anime_coming_soon');

        BlogAnime::create([
            "user_id"                         => $request->user_id,
            "nama_anime"                      => $request->nama_anime,
            "deskripsi_anime_coming_soon"     => $request->deskripsi_anime_coming_soon,
            "gambar_anime_coming_soon"        => $images,
        ]);

        return redirect(route('anime_coming_soon'))->with('success', "successfully uploaded your anime");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}