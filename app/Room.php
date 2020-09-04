<?php

namespace App;


class Room extends Model
{
    public function photo() {
        return $this->belongsTo(Photo::class);
    }
}
