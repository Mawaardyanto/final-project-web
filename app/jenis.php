<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table = 'jenis';
    protected $fillable = ['nama_jenis'];
    public $timestamps = false;

    public function baju(){
        return $this->hasMany(baju::class);
    }
}
