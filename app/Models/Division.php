<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_divisi',
        'divisions_id',
    ];
}
