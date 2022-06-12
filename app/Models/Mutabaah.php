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
    public function mutabaah()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
