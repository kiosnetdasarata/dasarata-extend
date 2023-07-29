<?php

namespace App\Models;

use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobTitle extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $fillable = [
        'divisions_id',
        'nama_jabatan',
    ];

    
    public function divisions()
    {
        return $this->belongsTo(Division::class, 'divisions_id');
    }

}
