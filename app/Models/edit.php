<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edit extends Model
{
    use HasFactory;
    protected $table= 'birth';
    protected $fillable = [
        'pname',  'email', 'cname', 'birth',  'date', 'gender','condition','status','vname',
    ];
}
