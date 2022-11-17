<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterAgent extends Model
{
    public function jazzid()
    {
        return $this->hasOne(JazzId::class, 'agent_id_fk', 'id');
    }

    public function post()
    {
        return $this->hasMany(AgentPost::class, 'agent_id_fk', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk', 'id');
    }
}
