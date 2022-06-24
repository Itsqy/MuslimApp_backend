<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dzikir extends Model
{
    use HasFactory;

    protected $fillable =[
        'judul',
        'arab',
        'latin',
        'arti',
        'riwayat',
    ];
}
