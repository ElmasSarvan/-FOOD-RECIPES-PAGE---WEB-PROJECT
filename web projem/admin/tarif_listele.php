<?php
session_start();
if (isset($_SESSION["kullanıcı_adı"])) {
    require_once "fonksiyonlar.php";
    $baglanti = baglan();
    $sorgu = "SELECT * FROM `projem`";
    $sonuc = mysqli_query($baglanti, $sorgu);
    echo '<table border="1">
<tr>
    <td>tarifler_id</td>
    <td>tarifler_baslik</td>
    <td>Düzenle</td>
    <td>Sil</td>
</tr>
';
    while ($satir = mysqli_fetch_array($sonuc)) {
        echo "
    <tr>
        <td>" . $satir["tarifler_id"] . "</td>
        <td>" . $satir["tarifler_baslik"] . '</td>
        <td><a href="tarif_düzenle.php?id=' . $satir["tarifler_id"] . '">Düzenle</a></td>
        <td><a href="tarif_sil.php?id=' . $satir["tarifler_id"] . '">Sil</a></td>
    </tr>';
    }
    echo "</table>";
} else {
    header("location:login.php");
}
