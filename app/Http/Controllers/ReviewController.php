<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Place;

class ReviewController extends Controller
{
    public function store(Request $request, Place $place)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:5',
        ]);

        $place->reviews()->create($validated);

        return back()->with('success', 'Спасибо за ваш отзыв!');
    }

}
