<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gest extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'quantity', 'price'];
    protected $table = 'product';
}