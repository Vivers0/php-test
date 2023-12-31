<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortrudnik extends Model
{
    use HasFactory;

    protected $table = 'sortrudniks';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
}
