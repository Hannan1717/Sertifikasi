<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\Schema;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumni';
    protected $guarded = [];
}
