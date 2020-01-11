<?php
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
    return view('welcome');
});
// Route Basic
Route::get('/about', function() {
	return '<h1>Halo</h1>'
	    .'Selamat datang di webapp saya<br>'
	    .'Laravel, emang keren.';
});
Route::get('profil', function()
{
	return view('biodata');
});
Route::get('menu', function()
{
	return view('makanan');
});
Route::get('sekolah', function()
{
	return view('profil');
});
Route::get('barang', function()
{
	return view('baju');
});
Route::get('perpus', function()
{
	return view('buku');
});
// Route Parameter
// Route::get('pesan/{makan}', function($mkn){
// 	return 'Makanan Yang Saya Pesan Adalah ' .$mkn;
// });
Route::get('pesan1/{makan}/{minum}/{harga}', function($mkn,$mnm,$hrg){
	return 'Makanan Yang Saya Pesan Adalah ' .$mkn
	        . '<br>Minuman Yang Saya Pesan Adalah ' .$mnm
	        . '<br>Total Harganya Adalah ' .$hrg;
});
// Route Optional Parameter
Route::get('halo/{nama?}', function($nama='Nathania'){
	return 'Hallo Nama Saya Adalah ' .$nama;
});
Route::get('pesan/{a?}/{b?}/{c?}', function($mkn=null,$mnm=null,$hrg=null){
	if(isset($mkn)){
		$mkn = "Anda Memesan $mkn";
		echo $mkn;
	}
	if(isset($mnm)) {
		$mnm = " & $mnm";
		echo $mnm;
	}
	if(isset($hrg)) {
		$hrg = " Dengan Harga $hrg";
		echo $hrg;
	}
	if(!$mkn && !$mnm && !$hrg){
		return " Anda Belum Memesan Sesuatu";
	}
});

//Membuat Route Model dan mencari semua model
Route::get('/testmodel', function() 
{ 
	$query = App\Post::all(); 
	return $query; 
});

//Mencari model berdasarkan ID
Route::get('/testmodel', function() 
{ 
	$query = App\Post::find(1); 
});

//Mencari model berdasarkan title
Route::get('/testmodel', function() 
{ 
	$query = App\Post::where('title','like','%cepat nikah%')->get(); 
	return $query; 
});

//Mengubah record, (hapus semua isi function) :
Route::get('/testmodel5', function() 
{ 
	$post = App\Post::find(1); 
	$post->title = "Ciri Keluarga Sakinah"; 
	$post->save(); 
	return $post;
	 
});


//Menghapus record, (hapus semua isi function) :
Route::get('/testmodel', function() 
{ 
	$post = App\Post::find(1); 
	$post->delete();
	// check data di database

});

// Menambah record, (hapus semua isi function) :
Route::get('/testmodel6', function() 
{ 
	$post = new App\Post; 
	$post->title = "7 Amalan Pembuka Jodoh"; 
	$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat"; 
	$post->save(); 
	return $post; 
	// check record baru di database
 
});

Route::get('/latihan', function() 
{ 
	$query = App\Latihan::all(); 
	return $query; 
});

Route::get('/latihan-1', function() 
{ 
	$query = App\Latihan::where('agama','=','islam') ->get(); 
	return $query; 
});

Route::get('/latihan-2', function() 
{ 
	$query = App\Latihan::select('id','nama','agama')
	->where('agama','=','islam') ->get(); 
	return $query; 
});

Route::get('/latihan/{id}', function($id) 
{ 
	$query = App\Latihan::find($id);
	return $query; 
});

Route::get('tambah-latihan', function()
{
	$query = New App\latihan();
	$query -> nama    = 'Amelia ';
	$query -> jabatan = 'Sekretaris ';
	$query -> jk      = 'Perempuan ';
	$query -> Alamat  = 'Lewipanjang ';
	$query -> total_gaji = '5000000 ';
	$query -> agama   = 'islam ';
	$query -> save();
	return $query;

});