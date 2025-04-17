<?php
require_once "sayfa.php";
head_başlik();
menu();

echo '<div id="article" style="background-color: #E9EFEC; width:1000px; height: 560px;">
           <h1 style="background-color:#E9EFEC;color:#16423C;margin:0 0 0 20px;padding:20px 0 5px 0;">GÜNLÜK KALORİ İHTİYACI HESAPLAMA</h1>
           <div class="kalori" style="background-color: #C9E9D2;">';
$yas=$_POST["yas"];
$kilo=$_POST["kilo"];
$boy=$_POST["boy"];
$boy=$_POST["boy"];
$cinsiyet=$_POST["cinsiyet"];
$hareket=$_POST["hareket"];
$sonuc=0;
if($cinsiyet == 1){
    $sonuc= 655.1 + (1.85 * $boy) + (9.56 * $kilo ) - (4.67 * $yas);
    switch($hareket){
        case 1: $sonuc= $sonuc * 1.2;break;
        case 2: $sonuc= $sonuc * 1.3;break;
        case 3: $sonuc= $sonuc * 1.4;break;
        case 4: $sonuc= $sonuc * 1.5;break;  
       
    }
    echo '<div style="margin:100px 0 0 150px;font-size:40px;font:bold;" height="200px" width="300px" >GÜNLÜK KALORİ İHTİYACINIZ <br>'.$sonuc.' kcal/gün</div>
    <div style="margin:20px 0 20px 0;">
                <div style="margin:0 0 0 200px;"><a href="kalori_hesaplama.php"><button type="reset" style="font-size: 20px;width:230px;height:50px;color:#16423C;background-color:#6A9C89;border:5px solid;float:left;"><b>Temizle</b></button></a></div>
            </div>';
}
else{
    $sonuc = 66.5 + (5 * $boy) + (13.75 * $kilo) - (6.77 * $yas);
    switch($hareket){
        case 1: $sonuc= $sonuc * 1.2;break;
        case 2: $sonuc= $sonuc * 1.3;break;
        case 3: $sonuc= $sonuc * 1.4;break;
        case 4: $sonuc= $sonuc * 1.5;break; 
        
    }
    echo '<div style="margin:100px 0 0 150px;font-size:40px;font:bold;" height="200px" width="300px" >GÜNLÜK KALORİ İHTİYACINIZ <br>'.$sonuc.' kcal/gün</div>
    <div style="margin:20px 0 20px 0;">
                <div style="margin:0 0 0 200px;"><a href="kalori_hesaplama.php"><button type="reset" style="font-size: 20px;width:230px;height:50px;color:#16423C;background-color:#6A9C89;border:5px solid;float:left;"><b>Temizle</b></button></a></div>
            </div>';
}
echo '</div>
</div>';

require_once "sayfa.php";
kalori_hesaplama();
footer();
?>
