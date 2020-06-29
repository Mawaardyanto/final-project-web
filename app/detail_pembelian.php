<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pembelian extends Model
{
     protected $table = 'detail_pembelian';
    protected $fillable = ['baju_id','harga_baju'];
    public $timestamps = false;

    public function pembelian(){
        return $this->belongsToMany(pembelian::class);
    }
}
