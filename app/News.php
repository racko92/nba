<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class News extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function teams()
    {
        return $this->belongsToMany( Team::class, 'news_teams');
    }
}
