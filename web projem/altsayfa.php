<?php
require_once "sayfa.php";
require_once "fonksiyonlar.php";
$baglanti = baglan();
$id = $_GET["id"];
$sorgu = "SELECT * FROM `projem` WHERE tarifler_id=$id";
$sonuc = mysqli_query($baglanti, $sorgu);
head_başlik();
menu();
while ($satir = mysqli_fetch_array($sonuc)) {
    echo '<div style="position:relative;"><img src="resimler/' . $satir["resimler"] . '" width="1000px" height="400px" style="position:absolute;"><div style="background-color:#16423C;color:white;margin:280px 0 0 0;position:absolute;font-size:50px;width:1000px;"><b>'.$satir["tarifler_baslik"].'</b></div></div><div style="margin:410px 0 0 5px;float:left;font-size:16px;">' . $satir["tarifler"] . '</div><div style="margin:420px 0 0 5px;float:left;" >' . $satir["videolar"] . '</div><div style="clear:both;"></div><div style="margin:0 0 0 20px;font-size:17px;">' . $satir["tarifler_yapılış"] . '</div>';
}
?>