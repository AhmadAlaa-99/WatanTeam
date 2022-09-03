<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Coach extends Model
{ 
    use HasFactory,Notifiable;
    //protected $guarded=[''];
    protected $fillable=['username','job','address','qualification', 'gender', 'request_date', 'accept_date', 'cvFile', 'trainAuthorized',  'tot', 'note', 'email'];
    public function Courses()
    {
        return $this->hasMany('App\Models\Course','coache_id');
    }
    public function User()
    {
        return $this->hasOne('App\Models\User','email');
    }
    public function routeNotificationForMail($notification=null)
    {
        return $this->email;
    }

}
