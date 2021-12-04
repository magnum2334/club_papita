<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = ['name', 'squad_number', 'equiment_id'];

    /**
     * _______________________________________relationship_________________________________________
     */
    public function equiment()
    {
        return $this->belongsTo(Equipment::class, 'equiment_id' );
    }

    public function goals()
    {
        return $this->hasMany(Goal::class, 'goal_id', 'id');
    }
}
