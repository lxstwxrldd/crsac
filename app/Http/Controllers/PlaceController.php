<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $places = Place::with(['category', 'reviews'])->get();

        if ($request->filled('category')) {
            $places = $places->where('category.slug', $request->category);
        }

        if ($request->filled('search')) {
            $search = mb_strtolower($request->search, 'UTF-8');
            $places = $places->filter(function ($p) use ($search) {
                return mb_strpos(mb_strtolower($p->title, 'UTF-8'), $search) !== false || 
                       mb_strpos(mb_strtolower($p->description, 'UTF-8'), $search) !== false;
            });
        }
        return view('welcome', compact('places'));
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
    public function show(Place $place)
    {
        $place->load(['category', 'images', 'reviews']);
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
