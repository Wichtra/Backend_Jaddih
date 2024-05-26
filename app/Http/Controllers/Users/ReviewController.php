<?php

namespace App\Http\Controllers\Users;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::with('user')->get();
        return response()->json([
            'message' => 'Detail data review',
            'data' => $review,
        ]);
    }

    public function store(){
        $review = Review::create([
            'revRating' => request('revRating'),
            'revContent' => request('revContent'),
            'userId' => request('userId'),
            'placeId' => request('placeId'),
        ]);

        return response()->json([
            'message' => 'Review created successfully',
            'review' => $review
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'revRating' => 'required|integer',
            'revContent' => 'required|string',
        ]);

        $review = Review::findOrFail($id);

        $review->update($request->all());

        return response()->json([
            'message' => 'Review updated successfully',
            'review' => $review
        ], 200);
    }
}
