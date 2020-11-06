<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'url'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
