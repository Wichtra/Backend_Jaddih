<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Place;
use App\Models\Review;
use App\Models\Transaction;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $placeCount = Place::count();
        $transactionCount = Transaction::count();
        $reviewCount = Review::count();

        return response()->json([
            'message' => 'Detail data dashboard',
            'data' => [
                'user_count' => $userCount,
                'place_count' => $placeCount,
                'transaction_count' => $transactionCount,
                'review_count' => $reviewCount,
            ],
        ], 200);
    }
}
