<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentPost extends Model
{
    public function agent()
    {
        return $this->belongsTo(RegisterAgent::class, 'agent_id_fk',  'id');
    }
}
