<?php

namespace App\Http\Controllers\Users;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TiketController extends Controller
{
    public function index()
    {
        $ticket = Tiket::all();
        return response()->json([
            'message' => 'Detail data tiket',
            'data' => $ticket,
        ]);
    }

    public function show($id)
    {
        $ticket = Tiket::all();
        return response()->json([
            'message' => 'Detail data tiket',
            'data' => $ticket,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'ticName' => 'required|string',
            'ticPrice' => 'required|integer',
        ]);

        $ticket = Tiket::findOrFail($id);

        $ticket->update($request->all());

        return response()->json([
            'message' => 'tiket updated successfully',
            'tiket' => $ticket
        ], 200);
    }

}
