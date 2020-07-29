<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsMob extends Model
{
    protected $table = 'mob_skill_db';

    public function mobs()
    {
        //return $this->belongsToMany(Mob::class,'mob_skill_db','MOB_ID','SKILL_ID');
    }

}
