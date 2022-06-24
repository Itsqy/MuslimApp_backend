<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutabaah extends Model
{
    use HasFactory;
    protected $fillable = [
        'catatan',
        'deskripsi',
        'user_id'
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
