<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function user()
    {
        return $this->hasMany(User::class, 'roles_id_fk', 'id');
    }
}
