<?php

namespace App\Http\Controllers\Users;

use App\Models\Transaction;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('tiket')->get();
        return response()->json([
            'message' => 'Data transaksi',
            'data' => $transactions,
        ]);
    }

    public function show($id)
    {
        $transaction = Transaction::with('tiket')->findOrFail($id);
        return response()->json([
            'message' => 'Detail data transaksi',
            'data' => $transaction,
        ]);
    }
}
