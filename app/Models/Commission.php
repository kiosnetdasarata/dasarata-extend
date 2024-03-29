<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $fillable = [
        'level_id',
        'nominal',
        'max_rentang',
        'min_rentang',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
