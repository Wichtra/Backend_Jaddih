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
}
