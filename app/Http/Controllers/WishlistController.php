<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AnimeKu;
use App\Models\Episode;
use App\Models\Wishlist;
use alernt;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $wishlist_all = Wishlist::findOrFail($id);
        $wishlist = Wishlist::with('animeku')->paginate(10); // Menampilkan 10 item per halaman
        $allwishlist = Wishlist::all();
        // return $wishlist;
        // $wishlist = Wishlist::with('anime')->get();
        return view('admin_master.user_admin.wishlist_user', compact('wishlist', 'allwishlist'));
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
        Wishlist::create([
            "user_id"     => $request->user_id,
            "anime_id"     => $request->anime_id,
        ]);
        return back()->with('success', "successfully Wishlist Your Anime");

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wishlist = Wishlist::findOrfail($id);

        return view('anim_category.category.anim_detail', compact('wishlist'));
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
        {
            // Validasi $id
            if (!is_numeric($id)) {
                return redirect()->back()->with('error', 'Invalid Wishlist ID');
            }
        
            // Temukan dan hapus Wishlist
            $wishlist = Wishlist::find($id);
            if ($wishlist) {
                $wishlist->delete();
                return redirect()->route('wishlist.index')->with('success', 'Wishlist successfully deleted');
            } else {
                return redirect()->back()->with('error', 'Wishlist not found');
            }
        }
    }
}