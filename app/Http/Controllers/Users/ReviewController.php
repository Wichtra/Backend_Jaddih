<?php

namespace App\Http\Controllers\Users;

use App\Models\Review;
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
}
