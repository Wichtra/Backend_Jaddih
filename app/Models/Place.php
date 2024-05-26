<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'plaLocation' => 'array',
    ];

    protected $fillable = [
        'plaName',
        'image',
        'plaLocation',
        'plaDescription',
        'plaDistance',
        'categorieId',
    ];
}
