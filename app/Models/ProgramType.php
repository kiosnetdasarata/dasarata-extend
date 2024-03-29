<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramType extends Model
{
    protected $connection = 'mysql3';
    protected $guarded = ['id'];

    use HasFactory;
}
