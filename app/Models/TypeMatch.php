<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMatch extends Model
{
    use HasFactory;

    protected $table = 'types_matches';

    protected $fillable = ['name'];

    
}
