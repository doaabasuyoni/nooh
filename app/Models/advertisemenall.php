<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class advertisemenall extends Model
{
    use HasFactory;
    protected $table = 'advall';
    protected $fillable = ['id','slug','title','description','created_at','updated_at'];
    protected $hidden = [];
}
