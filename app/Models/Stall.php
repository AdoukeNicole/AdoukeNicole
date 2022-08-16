<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'email','phone', 'address', 'password'];
    protected $table = 'users';
}
