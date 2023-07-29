<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modem extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'type_id',
        'sn_modem',
        'karyawan_nip',
        'invoices_id',
        'modem_masuk',
        'tujuan_out' 
    ];
    public function modemtype()
    {
        return $this->belongsTo(ModemType::class, 'type_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'karyawan_nip', 'nip_pgwi');
    }
}
