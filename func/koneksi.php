<?php
$serv = "localhost";
$user = "root";
$pass = "";
$data = "atsidata";
$koneksi = mysqli_connect($serv,$user,$pass,$data);
if(mysqli_connect_errno()){
    echo "<div>Koneksi Database Error (".mysqli_connect_errno().")</div>";
}else {echo "<div>Koneksi Database Stabil</div>";}
?>