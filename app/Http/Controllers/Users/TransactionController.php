<?php

namespace App\Http\Controllers\Users;

use App\Models\Tiket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetails;
use Illuminate\Routing\Controller;


class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['status', 'detail'])->get();
        return response()->json([
            'message' => 'Data transaksi',
            'data' => $transactions,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'qty' => 'required|integer',
            'transBooking' => 'required'
        ]);

        $ExpiredBookingDate = Carbon::parse($request->transBooking)->addDay();

        $transaction = Transaction::create([
            'userId' => '1ad6379a-abc8-48f1-a979-e92394da5bd1',
            'transStatus' => 1,
            'tiketDetailId' => 1,
            'transqty' => $request->qty,
            'transBooking' => $request->transBooking,
            'transExpired' => $ExpiredBookingDate,
        ]);

        for ($i = 0; $i < $request->qty; $i++) {
            $tiketDetail = TransactionDetails::create([
                'ticId' => 1,
                'transId' => $transaction->id,
            ]);
        }

        return response()->json([
            'message' => 'Transaksi berhasil',
            'data' => $transaction,
        ], 201);
    }

    public function show($id)
    {
        $transaction = Transaction::with(['status', 'detail'])->findOrFail($id);
        return response()->json([
            'message' => 'Detail data transaksi',
            'data' => $transaction,
        ]);
    }
}
