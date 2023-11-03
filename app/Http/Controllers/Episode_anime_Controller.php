<?php

namespace App\Http\Controllers;

use App\Models\AnimeKu;
use App\Models\Episode;
use Illuminate\Http\Request;

class Episode_anime_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $episode = Episode::orderBy('episode_number', 'asc')->simplePaginate(6);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword) 
        {
            $episode = Episode::where('episode_number', 'LIKE', "%$filterKeyword%")->paginate(6);
        }

        return view('admin_master.side_admin.episode_anime', compact('episode'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_master.side_admin.episode_anime');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Episode $episode)
    {
        
        return view('admin_master.side_admin.episode_anime', compact('episode'));
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
        
        $anime->episode()->update([
            'episode_number'           =>$request->episode_number,	
            'vidio_url'                =>$request->vidio_url,	
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}