<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name','address','phone','email'];
    protected $dates=['deleted_at']; 

    protected static function newFactory()
    {
        return \Modules\Company\Database\factories\CompanyFactory::new();
    }
}
