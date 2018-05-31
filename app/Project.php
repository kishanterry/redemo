<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
