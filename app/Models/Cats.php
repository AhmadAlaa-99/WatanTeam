<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    use HasFactory;
    

    protected $fillable= ['name'];
    protected $table='cats';

    public function Programs()
    {
        return $this->hasMany(Program::class);
    }
}
