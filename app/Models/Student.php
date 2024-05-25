<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $connection = 'mysql';
    protected $table = 'students';
    // protected $primaryKey = 'id';
    // protected $keyType = 'string';
    // protected $incrementing = false;
    // protected $timestamps = false;
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    protected $fillable = ['name', 'email', 'city', 'marks'];
}
