<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\User;
use App\Models\DocumentsType;
class Document extends Model
{
    use HasFactory;

  //  protected $fillable = ['name','docTypes','docDate','fileIcon','forpublish','docFile','description'];
  protected $guarded=[''];
    
    public function types (){

        return $this->belongsTo(DocumentsType::class,'type_id');
    }

    public function departments (){

        return $this->belongsTo(Department::class,'department_id');
    }
    public function users (){

        return $this->belongsTo(User::class,'user_id');
    }


}
