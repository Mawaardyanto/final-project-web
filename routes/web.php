<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/shop');
});

Route::get('/1', function () {
    return view('supplier');
});
Route::get('/2', function () {
    return view('auth.register1');
});
use \App\baju;
use \App\jenis;
Route::get('/buat_baju', function () {
    $jenis = jenis::find(1);
    $baju= baju::create(['nama_baju' => 'baju kekuatan']);
    $jenis->baju()->save($baju);
    return $jenis;
});
Route::get('/read_baju', function () {
    $jenis=jenis::findOrFail(1);
    $coba = $jenis->baju()->whereId(1)->update([
        'nama_baju' => 'baju update'
    ]);
    dd($jenis);
});

use \App\detail_pembelian;
use \App\pembelian;
Route::get('/buat_detail', function () {
    $pembelian = pembelian::find(1);
    $detail= detail_pembelian::create(['baju_id' => 1, 'harga_baju' => 10]);
    $pembelian->detail_pembelian()->save($detail);
    return $pembelian;
});

Auth::routes();
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
//crud baju
Route::get('/baju', 'BajuCont@show');
Route::post('/tambahbaju','BajuCont@createbaju');
Route::get('/editbaju/{id}', 'BajuCont@showedit');
Route::post('/prosesbaju/{id}','BajuCont@updatebaju');
Route::get('/deletebaju/{id}', 'BajuCont@deletebaju');

//crud jenis
Route::get('/jenis', 'JenisCont@show');
Route::post('/tambahjenis','JenisCont@createjenis');
Route::get('/editjenis/{id}', 'JenisCont@showedit');
Route::post('/prosesjenis/{id}','JenisCont@updatejenis');
Route::get('/deletejenis/{id}', 'JenisCont@deletejenis');

//crud size
Route::get('/size', 'SizeCont@show');
Route::post('/tambahsize','SizeCont@createsize');
Route::get('/editsize/{id}', 'SizeCont@showedit');
Route::post('/prosessize/{id}','SizeCont@updatesize');
Route::get('/deletesize/{id}', 'SizeCont@deletesize');

//crud supplier
Route::get('/supplier', 'SupplierCont@show');
Route::post('/tambahsupplier','SupplierCont@createsupplier');
Route::get('/editsupplier/{id}', 'SupplierCont@showedit');
Route::post('/prosessupplier/{id}','SupplierCont@updatesupplier');
Route::get('/deletesupplier/{id}', 'SupplierCont@deletesupplier');

//crud pembelian
Route::get('/pembelian', 'PembelianCont@show');
Route::post('/tambahpembelian','PembelianCont@createpembelian');
Route::get('/editpembelian/{id}', 'PembelianCont@showedit');
Route::post('/prosespembelian/{id}','PembelianCont@updatepembelian');
Route::get('/deletepembelian/{id}', 'PembelianCont@deletepembelian');

//crud belistock
Route::get('/belistock', 'BelistockCont@show');
Route::post('/tambahpembelian/{pembelian}','BelistockCont@tambahpembelian');
Route::post('/belistockbaju/{pembelian}','BelistockCont@createdatabeli');
});

Route::group(['middleware' => ['auth','checkRole:admin,pelanggan,pemilik toko']],function(){
//route shop
Route::get('/shop', 'ShopCont@show');
//role
Route::get('/role', 'RoleCont@show');
Route::post('/gantirole/{id}','RoleCont@ganti_role');
//penjualan
Route::get('/beli/{id}', 'PenjualanCont@show');
Route::post('/penjualan','PenjualanCont@jual');
});

Route::group(['middleware' => ['auth','checkRole:admin,pemilik toko']],function(){
    Route::get('/dashboard', 'DashboardCont@show');
    //laporan
    Route::get('/laporan', 'PenjualanCont@laporan');
    Route::get('/detail/{id}', 'PenjualanCont@detail_laporan');
    });





