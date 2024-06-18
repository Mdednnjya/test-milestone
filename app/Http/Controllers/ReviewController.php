<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        $reviews = Review::all();
        return view('reviews.create_review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'CustomerName' => 'required|string|max:255',
            'StarRating' => 'required|integer|between:1,5',
            'Comment' => 'required|string|max:1000',
        ]);

        Review::create([
            'customer_name' => $request->CustomerName,
            'star_rating' => $request->StarRating,
            'comment' => $request->Comment,
        ]);

        return redirect()->route('reviews.index');
    }

    public function pop()
    {
        $reviews = Review::all();
        return view('reviews.reviews', compact('reviews'));
    }
}


