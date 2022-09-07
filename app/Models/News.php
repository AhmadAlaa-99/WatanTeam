<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class News extends Model
{
    use HasFactory;

    protected $fillable=['content'];
    protected $casts=[
      
        'created_at'=>'datetime:Y-m-d',
    ];
    public function setDateAttribute( $value ) {
  $this->attributes['created_at'] = (new Carbon($value))->format('d/m/y');
}
/*
    public function setCreatedAt($value)
    {
        $this->attributes['created_at']=Carbon::createFromFormat('m/d/y H:M:S',$value)->format('Y-m-d');
    } 
    public function getCreatedAt()
    {
        return Carbon::createFromFormat('Y-m-d',$this->attributes['created_at'])->format('m/d/y');
    }
    */
}
