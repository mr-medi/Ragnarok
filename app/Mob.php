<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SkillsMob;

class Mob extends Model
{
    protected $table = 'mob_db';

    public function skills($idMob)
    {
        $skillsMob = SkillsMob::where('MOB_ID', $idMob)->get();
        return $skillsMob;
    }
}
