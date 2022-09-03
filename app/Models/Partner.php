<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Partner extends Model 
{
    use HasFactory,Notifiable;
    protected $guarded=[''];
    public function routeNotificationForMail($notification=null)
    {
        return $this->email;
    }
     public function Courses()
    {
        return $this->belongsToMany('App\Models\Courses','part_courses');
    }
}
