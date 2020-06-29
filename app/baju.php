<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    protected $table = 'baju';
    protected $fillable = ['nama_baju','merk','jenis_id','harga_beli','harga_jual'];
    public $timestamps = false;

    public function jenis(){
        return $this->belongsTo(baju::class);
    }

    public function stock(){
        return $this->hasOne(stock::class);
    }

    
}
