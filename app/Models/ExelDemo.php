<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExelDemo extends Model
{
    use HasFactory;

    protected $table = 'exel_demos';

    protected $fillable = ['name', 'email', 'phone', 'address'];
}
