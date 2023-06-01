<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_tlpn',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'almt_detail',
        'province_id',
        'regencie_id',
        'district_id',
        'village_id',
        'agama',
        'status_perkawinan',
        'pendidikan_terakhir',
        'nama_instansi',
        'tahun_lulus',
        'divisi_id',
        'jabatan_id'
    ];

    // protected $casts =[
    //     'jk'=>'enum',
    //     'agama'=>'enum',
    //     'status_perkawinan'=>'enum',
    // ];

}
