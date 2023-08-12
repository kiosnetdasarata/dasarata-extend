<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Division;
use App\Models\Employee;
use App\Models\JobTitle;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'karyawan_nip',
        'is_leader',
        'password',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'karyawan_nip','nip_pgwi');
    }
    public function divisions()
    {
        return $this->belongsTo(Division::class,'division_id');
    }
    public function jobtitle()
    {
        return $this->belongsTo(JobTitle::class,'job_title_id');
    }




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
