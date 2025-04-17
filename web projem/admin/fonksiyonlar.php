<?php
function baglan(){
$baglanti = mysqli_connect("localhost","root","","web_projem");
if (!$baglanti) {
    die("Connection failed: " . mysqli_connect_error());
}
return $baglanti;
}
?>