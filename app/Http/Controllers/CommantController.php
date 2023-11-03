<?php

namespace App\Http\Controllers;

use App\Models\AnimeKu;
// use App\Models\Commant;
use Illuminate\Http\Request;
use RyanChandler\Comments\Models\Comment;

class CommantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $commant = AnimeKu::all();
        
        return view('anim_category.category.anim_blog', compact('commant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anim_category.category.anim_blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {

        $request->validate([
            'commant' => ['required']
        ]);
    
        $animeku = AnimeKu::findOrFail($id);

        // return $animeku;
    
        $animeku->comment($request->commant, user: $request->user());
    
        return to_route('AnimeKu_detail', $animeku)->with('success_comment', "successfully Send Your Comment");
    }
    
    

    public function reply(Request $request, AnimeKu $animeku, Comment $comment)
    {
        $request->validate([
            'commant' => ['required']
        ]);

        $animeku->comment($request->commant, parent: $comment);

        return to_route('anim_blog', $animeku);
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