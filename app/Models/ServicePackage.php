<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    protected $connection = 'mysql3';

    protected $guarded = ['id'];
    public $timestamps = false;

    use HasFactory;
}
