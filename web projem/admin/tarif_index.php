<?php
session_start();
if(isset($_SESSION["kullanıcı_adı"])){
    echo "<h1>Hoşgeldin ".$_SESSION["kullanıcı_adı"]."</h1>";
    echo'
    <ul>
        <li><a href="tarif_ekle.php">Tarif Ekle</a></li>  
        <li><a href="tarif_listele.php">Tarif Listele</a></li>  
        <li><a href="logout.php">Oturumu Kapat</a></li>  
    </ul>';
}else{
    header("location:login.php");
}

?>