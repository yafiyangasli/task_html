<?php

	global $con;

	$con = mysqli_connect('localhost','root','','yaficv');

	if(!$con)
	{
		echo 'Tidak dapat terhubung ke database';
		die();
	}