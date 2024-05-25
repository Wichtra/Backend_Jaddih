<?php

namespace App\Http\Controllers\Users;

use App\Models\Place;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $places = Place::create([
            'plaName' => $request->plaName,
            'plaLocation' => $request->plaLocation,
            'plaDescription' => $request->plaDescription,
            // 'placeImage' => $request->placeImage,
            'plaDistance' => $request->plaDistance,
            'categorieId' => $request->categorieId,
        ]);

        return response()->json([
            'message' => 'Data tempat wisata berhasil ditambahkan',
            'data' => $places,
        ], 201);
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
