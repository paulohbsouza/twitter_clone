<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = " SELECT * FROM tweet WHERE id_usuario = $id_usuario ORDER BY data_inclusao DESC ";

	echo $sql;

	//mysqli_query($link, $sql);

?>