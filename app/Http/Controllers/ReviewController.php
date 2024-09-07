<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        $review = $request->validate([
            'comment' => 'required',
        ]);

        $newReview = Review::create($review);

        if ($newReview) {
            return redirect('/home');
        }
    }
}
