<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AnimeKu;
use App\Models\Episode;
use Illuminate\Http\Request;
use alernt;

class AnimekuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $animeku = AnimeKu::orderBy('judul', 'asc')->simplePaginate(6);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword) 
        {
            $animeku = AnimeKu::where('judul', 'LIKE', "%$filterKeyword%")->paginate(3);
        }
        
        return view('admin_master.side_admin.AnimeKu', compact('animeku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_master.side_admin.AnimeKu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'judul' =>  ['required','string','max:255'],
            'Deskripsi_anime' =>  ['required','string','max:1000'],
            'Gambar_anime' =>  'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'author' =>  ['required','max:255'],
            'type' =>  ['required','max:255'],
            'studio' =>  ['required','max:255'],
            'Status' =>  ['required','max:255'],
            'Genre' =>  ['required','max:255'],
            'Duration' =>  ['required','max:255'],
            'Quality' =>  ['required','max:255'],
        ]);

        $images = $request->file('Gambar_anime')->store('Poster_anime');

        AnimeKu::create([
            "judul"     => $request->judul,
            "Deskripsi_anime"     => $request->Deskripsi_anime,
            "Gambar_anime"     => $images,
            "author"     => $request->author,
            "type"     => $request->type,
            "studio"     => $request->studio,
            "Status"     => $request->Status,
            "Genre"     => $request->Genre,
            "Duration"     => $request->Duration,
            "quality"     => $request->quality
        ]);

        return redirect(route('AnimeKuCreate'))->with('success', "successfully uploaded your anime");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animeku = AnimeKu::findOrfail($id);
        $allAnime = AnimeKu::all();

        return view('admin_master.side_admin.AnimeKu_show', compact('animeku','allAnime'));
    }

        public function show_detail(string $id)
    {
        $animeku = AnimeKu::findOrfail($id);

        return view('anim_category.category.anim_detail', compact('animeku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return $episode;
        $allAnime = AnimeKu::all();
        return view('admin_master.side_admin.episode_anime', compact('episode','allAnime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anime = AnimeKu::findOrFail($id);
        $anime -> update([
           'Deskripsi_anime'           =>$request->Deskripsi_anime,  
       ]);
        
        $anime->Episode()->create([
            'episode_number'           =>$request->episode_number,	
            'manga_animeku'            =>$request->manga_animeku,	
        ]);
        return redirect( route('list_anime'))->with('success', 'Item updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}