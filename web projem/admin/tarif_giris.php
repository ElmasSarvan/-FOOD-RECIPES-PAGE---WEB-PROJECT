<?php
require_once "fonksiyonlar.php";
$baglanti=baglan();
$kullanıcı_adı=mysqli_real_escape_string($baglanti,$_POST["kullanıcı_adı"]);
$kullanıcı_sifre=mysqli_real_escape_string($baglanti,$_POST["kullanıcı_sifre"]);

$sorgu="SELECT * FROM kullanıcı WHERE kullanıcı_adı='$kullanıcı_adı' AND kullanıcı_sifre='$kullanıcı_sifre'";
//echo $sorgu;
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    $count = mysqli_num_rows($sonuc);
    if($count>0){
        session_start();
        $_SESSION["kullanıcı_adı"]=$kullanıcı_adı;
        header("location:tarif_index.php");
    }else{
        echo "Eksik ya da hatalı bilgi";
    }

}