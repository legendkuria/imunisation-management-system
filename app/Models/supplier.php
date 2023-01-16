<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hos extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = [
       'name', 'email', 'password',
    ];
}
