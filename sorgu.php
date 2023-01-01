<?php
require("connection.php");



$sorgu1=mysqli_query($baglanti,"SELECT * from kategoriler,veriler where kategoriler.kategori_id=veriler.kategori_id and kategoriler.kategori_id=1");
$tarih1='';
$bolgesel_satis1='';
$stok_miktari1='';


while($satir1=mysqli_fetch_array($sorgu1)){
    $bolgesel_satis11=$satir1["bolgesel_satis"];
    $stok_miktari11=$satir1["stok_miktari"];
    $tarih11=date('M, Y', strtotime($satir1['tarih']));

    $tarih1 = $tarih1.'"'.$tarih11.'",';
    $bolgesel_satis1 = $bolgesel_satis1.'"'.$bolgesel_satis11.'",';
    $stok_miktari1 = $stok_miktari1.'"'.$stok_miktari11.'",';
}
$tarih1=trim($tarih1, ",");
$bolgesel_satis1=trim($bolgesel_satis1, ",");
$stok_miktari1=trim($stok_miktari1, ",");

$sorgu2=mysqli_query($baglanti,"SELECT *
from kategoriler,veriler
where kategoriler.kategori_id=veriler.kategori_id and kategoriler.kategori_id=2");
$tarih2='';
$bolgesel_satis2='';
$stok_miktari2='';


while($satir2=mysqli_fetch_array($sorgu2)){
    $bolgesel_satis22=$satir2["bolgesel_satis"];
    $stok_miktari22=$satir2["stok_miktari"];
    $tarih22=date('M, Y', strtotime($satir2['tarih']));

    $tarih2 = $tarih2.'"'.$tarih22.'",';
    $bolgesel_satis2 = $bolgesel_satis2.'"'.$bolgesel_satis22.'",';
    $stok_miktari2 = $stok_miktari2.'"'.$stok_miktari22.'",';

}
$tarih2=trim($tarih2, ",");
$bolgesel_satis2=trim($bolgesel_satis2, ",");
$stok_miktari2=trim($stok_miktari2, ",");

$sorgu3=mysqli_query($baglanti,"SELECT *
from kategoriler,veriler
where kategoriler.kategori_id=veriler.kategori_id and kategoriler.kategori_id=3");
$tarih3='';
$bolgesel_satis3='';
$stok_miktari3='';


while($satir3=mysqli_fetch_array($sorgu3)){
    $bolgesel_satis33=$satir3["bolgesel_satis"];
    $stok_miktari33=$satir3["stok_miktari"];
    $tarih33=date('M, Y', strtotime($satir3['tarih']));

    $tarih3 = $tarih3.'"'.$tarih33.'",';
    $bolgesel_satis3 = $bolgesel_satis3.'"'.$bolgesel_satis33.'",';
    $stok_miktari3 = $stok_miktari3.'"'.$stok_miktari33.'",';
}
$tarih3=trim($tarih3, ",");
$bolgesel_satis3=trim($bolgesel_satis3, ",");
$stok_miktari3=trim($stok_miktari3, ",");

$sorgu4=mysqli_query($baglanti,"SELECT *
from kategoriler,veriler
where kategoriler.kategori_id=veriler.kategori_id and kategoriler.kategori_id=4");
$tarih4='';
$bolgesel_satis4='';
$stok_miktari4='';


while($satir4=mysqli_fetch_array($sorgu4)){
    $bolgesel_satis44=$satir4["bolgesel_satis"];
    $stok_miktari44=$satir4["stok_miktari"];
    $tarih44=date('M, Y', strtotime($satir4['tarih']));

    $tarih4 = $tarih4.'"'.$tarih44.'",';
    $bolgesel_satis4 = $bolgesel_satis4.'"'.$bolgesel_satis44.'",';
    $stok_miktari4 = $stok_miktari4.'"'.$stok_miktari44.'",';

}
$tarih4=trim($tarih4, ",");
$bolgesel_satis4=trim($bolgesel_satis4, ",");
$stok_miktari4=trim($stok_miktari4, ",");



$tarihler="";

$tarihSorgu1=mysqli_query($baglanti,"select DISTINCT concat(monthname(veriler.tarih),' ', year(veriler.tarih)) as tarihler from veriler order by veriler.veri_id");

while($date1=mysqli_fetch_array($tarihSorgu1)){
    $tarihler1=$date1['tarihler'];
    $tarihler=$tarihler."'".$tarihler1."',";
}
$tarihler=trim($tarihler, ",");

$bolgeler="";

$bolgelerSorgu1=mysqli_query($baglanti,"SELECT bolge_ad as bolgeler from bolgeler");
while($bolge=mysqli_fetch_assoc($bolgelerSorgu1)){
    $bolgeler1=$bolge['bolgeler'];
    $bolgeler=$bolgeler."'".$bolgeler1."',";
}



?>