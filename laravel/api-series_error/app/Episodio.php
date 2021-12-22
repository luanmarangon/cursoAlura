<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timeStamps = false;
    protected $fillable = ['tempora', 'numero', 'assistido'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}