<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch_companie extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable= [
        'kode_branch',
    ];
}
