<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $connection = 'mysql3';

    protected $guarded = ['id'];

    use HasFactory;
    public function programtype(){
        return $this->belongsTo(ProgramType::class, 'program_type_id', 'id');
    }
}
