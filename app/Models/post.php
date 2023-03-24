<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'newall';
    protected $fillable = ['id','slug','title','description','image_path','created_at','updated_at'];
    protected $hidden = [];
}
