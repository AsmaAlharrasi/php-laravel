<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _posts extends Model
{
    use HasFactory;
    // protected $table = '_posts';
    protected $fillable = ['title', 'Descreption'];
    public $timestamps = false;
}
