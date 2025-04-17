<?php
session_start();
if(isset($_SESSION["kullanıcı_adı"])){
$id = $_GET["id"];
require_once "fonksiyonlar.php";
$baglanti=baglan();
$sorgu = "SELECT * FROM `projem` WHERE tarifler_id=$id";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    $satir=mysqli_fetch_array($sonuc);
    /*echo $satir["resimler"];
    echo $satir["tarifler"];
    echo $satir["tarifler_yapılış"];
    echo $satir["videolar"];*/

    echo'<form method="post" action="tarif_update.php">
    <input type="hidden" name="tarifler_id" value='.$id.'>
Resimler<br><input type="text" name="resimler" value="'.$satir["resimler"].'"><br>
Tarif Adı<br><textarea rows="20" cols="100"name="tarifler_baslik" >'.$satir["tarifler_baslik"].'</textarea><br>
Tarifler<br><textarea rows="100" cols="100"name="tarifler" >'.$satir["tarifler"].'</textarea><br>
Tarifler Yapılış<br></div><textarea rows="100" cols="100"name="tarifler_yapılış" >'.$satir["tarifler_yapılış"].'</textarea><br>
Videolar<br><textarea rows="20" cols="100"name="videolar" >'.$satir["videolar"].'</textarea><br>
<input type="submit" value="Kaydet">
</form>    ';
}
}
else{
    header("location:login.php");
}
?>