<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hint extends Model
{
    protected $guarded = [];

    public function pict()
    {
        return $this->belongsTo(Pict::class);
    }
}
