<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimeKu;
use App\Models\User;


class List_AnimeKu_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animeku = AnimeKu::orderBy('judul', 'asc')->simplePaginate(6);
        $total_user = User::count();
        return view('admin_master.user_admin.List_animeku',compact('animeku', 'total_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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