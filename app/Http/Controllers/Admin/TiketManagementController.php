<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketManagementController extends Controller
{

    public function index()
    {
        $tiket = Tiket::all();
        return response()->json([
            'status' => 'success',
            'data' => $tiket
        ], 200);
    }

    public function store(Request $request)
    {
        $tiket = Tiket::create($request->all());

        return response()->json([
            'message' => 'tiket created successfully',
            'tiket' => $tiket
        ], 201);
    }

    // public function show($id)
    // {
    //     $tiket = Tiket::findOrFail($id);
    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $tiket
    //     ], 200);
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ticName' => 'required|string',
            'ticPrice' => 'required|integer',
        ]);

        $tiket = Tiket::findOrFail($id);

        $tiket->update($request->all());

        return response()->json([
            'message' => 'tiket updated successfully',
            'tiket' => $tiket
        ], 200);
    }

    public function destroy($id)
    {
        Tiket::destroy($id);

        return response()->json([
            'message' => 'tiket deleted successfully'
        ], 200);
    }
}
