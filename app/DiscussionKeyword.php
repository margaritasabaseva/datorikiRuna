<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionKeyword extends Model
{
    public function discussion() {
        return $this->belongsTo('App\Discussion');
    }

    public function keyword() {
        return $this->belongsTo('App\Keyword');
    }
}
