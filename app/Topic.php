<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function discussions() {
        return $this->hasMany('App\Discussion');
    }
}
