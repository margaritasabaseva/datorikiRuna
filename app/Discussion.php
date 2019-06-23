<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public function discussionkeywords() {
        return $this->hasMany('App\DiscussionKeyword');
    }
}
