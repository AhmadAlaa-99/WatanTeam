<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table='programs';
    protected $guarded=[''];
  //  protected $fillable =['name','goals','audince','imageUrl','active','topics','note','cat_id'];
    protected $casts = ['imageUrl' => 'array'];
  
    public function cats()
    {
        return $this->belongsTo('App\Models\Cats','cat_id');
    }
    public function Activities()
    {
        return $this->hasMany('App\Models\Activity');
    }
}
