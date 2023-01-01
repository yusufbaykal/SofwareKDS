<?php
$baglanti=mysqli_connect("localhost","root","","stok");
if($baglanti){
    echo "";
    mysqli_query($baglanti,"SET NAMES UTF8");
}
else {
    die("Bağlantı sağlanamadı");
}
?>