<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polling extends Model
{
    use HasFactory;
    protected $table = 'pollings';
    protected $fillable = ['ukmsid', 'usersid', 'token'];
}
