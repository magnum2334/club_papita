<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = ['type_match_id','equiment_id' ,'goal_id' ,'tournament_id'];
    

    public function typematch()
    {
        return $this->belongsTo(TypeMatch::class, 'type_match_id');
    }

    public function equipment1()
    {
        return $this->belongsTo(Equipment::class, 'equiment_id', 'id');
    }

    public function equipment2()
    {
        return $this->belongsTo(Equipment::class, 'equipment2_id', 'id');
    }
   
}
