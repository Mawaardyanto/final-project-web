<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['tgl_jual','total_harga','total_penjualan','pelanggan_id'];
    public $timestamps = false;

    
    public function detail_penjualan(){
        return $this->hasMany(detail_penjualan::class);
    }
}
