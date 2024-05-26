<?php

namespace App\Http\Controllers\Admin;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceRecommendationController extends Controller
{
    public function index()
    {
        $place = Place::all();
        return response()->json([
            'message' => 'Detail data tiket',
            'data' => $place,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'plaName' => 'required|string',
            'plaLocation' => 'required|string',
            'plaDescription' => 'required|string',
            'plaDistance' => 'required|integer',
            'categorieId' => 'required|integer',
        ]);

        $place = Place::create([
            'plaName' => $request->plaName,
            'plaLocation' => $request->plaLocation,
            'plaDescription' => $request->plaDescription,
            'plaDistance' => $request->plaDistance,
            'categorieId' => $request->categorieId,
        ]);

        return response()->json([
            'message' => 'Place created successfully', 
            'place' => $place
        ], 201);
    }

    public function show($id)
    {
        $place = Place::findOrFail($id);

        return response()->json(['place' => $place], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'plaName' => 'string',
            'plaLocation' => 'string',
            'plaDescription' => 'string',
            'plaDistance' => 'integer',
            'categorieId' => 'integer',
        ]);

        $place = Place::findOrFail($id);

        $place->update($request->all());

        return response()->json(['message' => 'Place updated successfully', 'place' => $place], 200);
    }

    public function destroy($id)
    {
        $place = Place::findOrFail($id);

        $place->delete();

        return response()->json(['message' => 'Place deleted successfully'], 200);
    }
}
