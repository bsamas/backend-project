<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
        'department_id',
        'room_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);

    }

    public function department()
    {
        return $this->belongsTo(department::class);
    }
}
