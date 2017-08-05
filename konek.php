<?php

// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// Muhammat Rasid Ridho, S.Kom., M.SI.

$server="localhost"; //definisi server lokal.
$user="root"; //definisi user.
$pass=""; //definisi password (menyesuaikan).
$db="workshop"; //definisi database yang telah dibuat tadi.


//mengkoneksikan server lokal.
$kon = mysqli_connect($server,$user,$pass, $db) or die ("Maaf,
koneksi gagal");


?>

