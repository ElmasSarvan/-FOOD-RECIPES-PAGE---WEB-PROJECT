<?php
require_once "fonksiyonlar.php";
$baglanti = baglan();
$resimler = $_POST["resimler"];
$tarifler = $_POST["tarifler"];
$tarifler_yapılış = $_POST["tarifler_yapılış"];
$videolar = $_POST["videolar"];
$tarifler_baslik = $_POST["tarifler_baslik"];
$sorgu = "INSERT INTO `projem`( `resimler`,`tarifler_baslik`, `tarifler`, `tarifler_yapılış`,`videolar`) 
VALUES ('$resimler','$tarifler_baslik','$tarifler','$tarifler_yapılış','$videolar')";
//echo $sorgu;
$sonuc = mysqli_query($baglanti, $sorgu);
if ($sonuc) {
    //echo "Kayıt başarıyla eklendi";
    header("location:tarif_listele.php");
} else {
    echo "Problem var";
}
?>