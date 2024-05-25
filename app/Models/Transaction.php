<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'transStatus',
        'transqty',
        'transBooking',
        'transExpired',
    ];

    public function status()
    {
        return $this->hasMany(Status::class, 'id', 'transStatus');
    }

    public function detail()
    {
        return $this->hasMany(TransactionDetails::class, 'transId', 'id');
    }
}
