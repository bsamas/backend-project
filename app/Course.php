<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'code',
        'course_name',
        'lecturer_id'

    ];

    protected $dates=[
        'deleted_at'
    ];

public function leturer()
{
return $this->belongsTo(Lecturer::class);
}

public function attendances()
{
    return $this->hasMany(Attendance::class);
}

public function students(){
    return $this->belongsToMany(Student::class);
}
public function departments()
{
    return $this->belongsToMany(department::class);
}

public function rooms()
{
    return $this->belongsToMany(room::class);
}

}
