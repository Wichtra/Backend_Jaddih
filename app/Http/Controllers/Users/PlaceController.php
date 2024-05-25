<?php

namespace App\Http\Controllers\Users;

use App\Models\Place;
use Illuminate\Routing\Controller;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return response()->json([
            'message' => 'Data tempat wisata',
            'data' => $places,
        ]);
    }

    public function show($category)
    {
        $places = Place::where('categorieId', $category)->get();
        return response()->json([
            'message' => 'Data tempat wisata berdasarkan kategori',
            'data' => $places,
        ]);
    }
}
