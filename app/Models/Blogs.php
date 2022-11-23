<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;
    protected $fillable = ['name','picture', 'description','author_id'];
}
