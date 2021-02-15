<?php

namespace App;


class Channel extends Model
{
    protected $fillable = ['name'];

    public function discussions() {
        return $this->hasMany('App\Discussion');
    }
}
