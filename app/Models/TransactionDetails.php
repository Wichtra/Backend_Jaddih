<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'transId',
        'ticId',
    ];
}
