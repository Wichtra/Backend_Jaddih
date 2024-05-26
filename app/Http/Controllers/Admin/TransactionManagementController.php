<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionManagementController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return response()->json([
            'status' => 'success',
            'data' => $transaction
        ], 200);
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $transaction
        ], 200);
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'userId' => 'required|integer',
    //         'transStatus' => 'required|integer',
    //         'transqty' => 'required|integer',
    //         'transBooking' => 'required|string',
    //         'transExpired' => 'required|string',
    //     ]);

    //     $transaction = Transaction::findOrFail($id);

    //     $transaction->update($request->all());

    //     return response()->json([
    //         'message' => 'transaction updated successfully',
    //         'transaction' => $transaction
    //     ], 200);
    // }

    public function destroy($id)
    {
        Transaction::destroy($id);
        return response()->json([
            'message' => 'transaction deleted successfully'
        ], 200);
    }
}
