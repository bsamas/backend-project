<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{

    use SoftDeletes;

    protected $fillable=[
        'department_name'
    ];

     protected  $dates=[
         'deleted_at'
     ];

     public function lecturers()

     {
     return $this->hasMany(Lecturer::class);
     }

    public function courses()
    {
        return $this->belongsToMany(course::class);
    }

}
