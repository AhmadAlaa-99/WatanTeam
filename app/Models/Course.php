<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[''];
    public function types()
    {
        return $this->belongsTo('App\Models\CourseType','type_id');

    }
    public function Coach()
    {
        return $this->belongsTo('App\Models\Coach','coache_id');
    }
    public function Users()
    {
        return $this->belongsToMany('App\Models\User','course_trains');
    }
    public function Partners()
    {
        return $this->belongsToMany('App\Models\Partner','part_courses');
    }
}
