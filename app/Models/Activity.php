<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Activity extends Model
{
    use HasFactory;

  //  protected  $fillable=['name','pubDate', 'imageUrl','published','note','program_id'];
  protected $guarded=[];
  //  protected $casts = ['imagUrl' => 'array'];
    public function programs()
    {
        return $this->belongsTo('App\Models\Program','program_id');
    }
}


