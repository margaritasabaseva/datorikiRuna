<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    public function discussionkeywords() {
        return $this->hasMany('App\DiscussionKeyword');
    }
}
