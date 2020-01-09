<?php



Route::get('/', function () {
    return view('welcome');
});

// Route basic
Route::get('/about', function () {
	return '<h1>Halo</h1>'
	.'Selamat Datang di webapp saya<br>'
	.'Laravel, emang keren.';

});

Route::get('profil', function()
{
	return view ('Biodata');
});


Route::get('Menu', function()
{
	return view ('Makanan');
});


Route::get('Sekolah', function()
{
	return view ('profil');
});


Route::get('Barang', function()
{
	return view ('Baju');
});


Route::get('perpus', function()
{
	return view ('Buku');
});

Route Parameter
Route::get('pesan/{makan}/{minum}/{harga}',function($mkn,$mnm,$hrg){
	return 'Makanan Yang Saya Pesan adalah' .$mkn
			.'<br>Minuman Yang Saya Pesan Adalah' .$mnm
			.'<br>Total harganya Adalah' .$hrg;


});