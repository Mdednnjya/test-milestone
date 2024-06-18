<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Retrieve reviews from session
        $reviews = session()->get('reviews', []);
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'CustomerName' => 'required|string|max:255',
            'StarRating' => 'required|integer|between:1,5',
            'Comment' => 'required|string|max:1000',
        ]);

        // Retrieve existing reviews from session or initialize as an empty array
        $reviews = session()->get('reviews', []);

        // Add new review to the array
        $reviews[] = $request->only(['CustomerName', 'StarRating', 'Comment']);

        // Store the reviews back in the session
        session()->put('reviews', $reviews);

        return redirect()->route('reviews.index');
    }

}

