<?php
	require '../vendor/autoload.php';

	$app = new \Slim\Slim();
	$app->get('/',function(){
		redirect
	});

	
	$app->get('/show/about', function()use($app){
		$db = DBConnection();
		$result = $db->query("select * from about")->fetchAll();
		//$app->render('tabel.php', array('data' => $result));
		echo json_encode($result);
	});

	$app->post('/insert', function()use($app){
		echo DBConnection()->exec("insert into kategori (judul_kategori) values ('".$app->request->post('judul_kategori')."');");
	});

	$app->put('/update/:kode', function($kode)use($app){
		echo DBConnection()->exec("update kategori set judul_kategori = '".$app->request->put('judul_kategori')."' where kode_kategori='$kode';");
	});

	$app->delete('/hapus/:kode', function($kode){
		echo DBConnection()->exec("delete from kategori where kode_kategori='$kode';");
	}); 

	function DBConnection(){
		return new PDO('mysql:host=128.199.93.68;dbname=bekup_arie_malang','bekup','83kup');
	}
	$app->run();