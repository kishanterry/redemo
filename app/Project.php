<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->demo_slug = str_slug($project->demo_title);
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
