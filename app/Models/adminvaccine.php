<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminvaccine extends Model
{
    use HasFactory;
    protected $table= 'addvaccine';
    protected $fillable = [
        'id','vname', 'time','period'
    ];

}
