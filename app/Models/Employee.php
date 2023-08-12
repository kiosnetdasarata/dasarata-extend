<?php

namespace App\Models;

use App\Models\Division;

use App\Models\JobTitle;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Employee extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $fillable = [
        'nip_pgwi',
        'nama',
        'nickname',
        'tgl_mulai_kerja',
        'email',
        'no_tlpn',
        'branch_company_id',
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
        'status_level_id',
        'divisi_id',
        'jabatan_id'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class, 'divisi_id');
    }
    public function jobtitle()
    {
        return $this->belongsTo(JobTitle::class, 'jabatan_id');
    }
    public function status_level()
    {
        return $this->belongsTo(Status_level::class, 'status_level_id');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function modem(){
        return $this->hasMany(Modem::class);
    }

}
