<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return response()->json([
            'message' => 'data category berhasil di tampilkan',
            'categories' => $categories
        ]);
    }
}
