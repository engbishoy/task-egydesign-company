<?php

namespace Modules\Employee\Entities;

use Modules\Company\Entities\Company;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory,SoftDeletes,Notifiable;

    protected $fillable = ['name','phone','email','password','company_id','code_verify'];
    protected $dates=['deleted_at'];

    protected $hidden = [
        'password',
    ];
       /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }


    protected static function newFactory()
    {
        return \Modules\Employee\Database\factories\EmployeeFactory::new();
    }
}
