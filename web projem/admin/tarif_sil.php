<?php
session_start();
require_once "fonksiyonlar.php";
$baglanti=baglan();
$id=$_GET["id"];
$sorgu="DELETE FROM `projem` WHERE tarifler_id=$id";
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:tarif_listele.php");
}else{
    echo "Problem var"; 
}
?>