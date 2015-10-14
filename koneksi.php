<?php
	$link = mysql_connect('localhost','root','') or die('gagal koneksi'.mysql_error());
	mysql_select_db('mahasiswa') or die('tidak memilih database');
?>