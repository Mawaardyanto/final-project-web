<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    protected $table = 'detail_penjualan';
    protected $fillable = ['baju_id','size_id','penjualan_id'];
    public $timestamps = false;

    public function penjualan(){
        return $this->belongsToMany(penjualan::class);
    }

}
