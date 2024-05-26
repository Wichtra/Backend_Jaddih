<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Http\Controllers\Controller;

class ReviewManagementController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return response()->json([
            'status' => 'success',
            'data' => $review
        ], 200);
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $review
        ], 200);
    }

    public function destroy($id)
    {
        Review::destroy($id);
        return response()->json([
            'message' => 'review deleted successfully'
        ], 200);
    }
}
