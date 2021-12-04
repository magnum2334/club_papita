<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tournament;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';

    protected $fillable = ['name', 'date'];

    
    public function players()
    {
        return $this->hasMany(Player::class , 'equiment_id', 'id');
    }
    

    public function tourments()
    {
        return $this->belongsToMany(Tournament::class);
    }
   
}
