<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['nama_supplier','alamat','tlp'];
    public $timestamps = false;

    public function pembelian(){
        return $this->hasMany(pembelian::class);
    }
}
