<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable =['title','content','slug','channel_id'];

    public function author () 
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function replies () {
        return $this->hasMany (Reply::class);
    }

    public function getRouteKeyName () 
    {
        return 'slug'; 
    }

    public function scopeFilterByChannels($builder) 
    {
        if (request()->query('channel')) {
            //filter
            $channel = Channel::where('slug', request()->query('channel'))->first();

            if ($channel) {
               return $builder->where('channel_id', $channel->id);
            }
            return $builder;
        }

        return $builder;
    }
}
