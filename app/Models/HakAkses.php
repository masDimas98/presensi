<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_akses_id',
        'user_akses_id',
        'aktif'
    ];
}
