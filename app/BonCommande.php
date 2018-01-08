<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonCommande extends Model
{
    protected $fillable = ['numero' , 'designation' , 'created_at' , 'Etat'];
}
