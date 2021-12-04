<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;

class Tournament extends Model
{
    use HasFactory;

    protected $table = 'tournaments';

    protected $fillable = ['name', 'date'];


    public function equipments()
    {
        return $this->belongsToMany(Equipment::class, 'tournaments_equipments', 'tournament_id' ,'equiment_id');
    }
    
    public function matches()
    {
        return $this->hasMany(Match::class, 'tournament_id' ,'id');
    }
}

