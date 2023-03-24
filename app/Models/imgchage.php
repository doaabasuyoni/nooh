<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imgchage extends Model
{
    use HasFactory;
    protected $table = 'imagechv';
    protected $fillable = ['id','imagefirst','imagesec','imagelast','created_at','updated_at'];
    protected $hidden = [];
}
