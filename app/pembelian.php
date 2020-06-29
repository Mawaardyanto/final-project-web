<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['tgl_beli','total_harga','total_pembelian'];
    public $timestamps = false;

    
    public function detail_pembelian(){
        return $this->hasMany(detail_pembelian::class);
    }
}
