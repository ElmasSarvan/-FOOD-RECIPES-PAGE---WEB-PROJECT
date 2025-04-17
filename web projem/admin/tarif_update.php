<?php
session_start();
require_once "fonksiyonlar.php";
$baglanti=baglan();
$resimler=$_POST["resimler"];
$tarifler=$_POST["tarifler"];
$tarifler_yapılışı=$_POST["tarifler_yapılışı"];
$videolar=$_POST["videolar"];
$id = $_POST["tarifler_id"];

$sorgu="UPDATE `projem` SET 
`resimler`='$resimler',
`tarifler`='$tarifler',
`tarifler_yapılış`='$tarifler_yapılış',
`videolar`=$videolar WHERE tarifler_id=$id";
$sonuc= mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:tarif_listele.php");
    //echo "Kayıt Başarıyla Güncellendi";
}else{
    echo "Problem var";
}
?>