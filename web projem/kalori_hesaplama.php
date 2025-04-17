<?php
require_once "sayfa.php";
head_başlik();
menu();

        echo '<div id="article" style="background-color: #E9EFEC; width:1000px; height: 560px;">
           <h1 style="background-color:#E9EFEC;color:#16423C;margin:0 0 0 20px;padding:20px 0 5px 0;">GÜNLÜK KALORİ İHTİYACI HESAPLAMA</h1>
           <p style="margin: 5px 0 0 20px; font-size: 20px;">Formda yer alan bilgileri doldurarak günlük kalori ihtiyacınızı öğrenebilirsiniz.</p>
           <form method="post" action="islem.php">
           <div class="kalori" style="background-color: #C9E9D2;">
            <div style="margin:20px 0 20px 0;">
                <div width="200px" style="float:left;padding:0 100px 0 50px;"><label for="kg" style="color:#16423C;"><b>KİLO(kg):</b></label></div>
                <input type="number" style="font-size: 20px;"id="kg" name="kilo">
            </div>
            <div style="margin:20px 0 20px 0;">
                <div width="200px" style="float:left;padding:0 105px 0 50px;"><label for="boy" style="color:#16423C;"><b>BOY(cm):</b></label></div>
                <input type="number" style="font-size: 20px;"id="boy" name="boy">
            </div>
            <div style="margin:20px 0 20px 0;">
                <div width="200px" style="float:left;padding:0 149px 0 50px;"><label for="yaş" style="color:#16423C;"><b>YAŞ:</b></label></div>
                <input type="number" style="font-size: 20px;"id=yaş name="yas">
            </div>
            <div style="margin:20px 0 20px 0;">
                <div style="width:300px;float:left;padding: 0 0 0 50px;"><label for="hareket" style="color:#16423C;"><b>HAREKETLİLİK SEVİYENİZ:</b></label></div>
                <div style="margin:0 0 0 350px;">
                <input type="radio" style="font-size: 20px;"id=hareket name="hareket" value="1">Çok az hareket ediyorum. Masa başı çalışıyorum.<br>
                <input type="radio" style="font-size: 20px;" id="hareket" name="hareket" value="2">Hafif hareketliyim.<br>
                <input type="radio" style="font-size: 20px;" id="hareket" name="hareket" value="3">Orta düzeyde hareketliyim.<br>
                <input type="radio" style="font-size: 20px;" id="hareket" name="hareket" value="4">Fazlasıyla hareketliyim. Düzenli olarak spor yapıyorum.</div>
            </div>
            <div style="margin:20px 0 20px 0;">
                <div style="float:left;padding: 0 0 0 50px;"><label for="cinsiyet" style="color:#16423C;"><b>CİNSİYET:</b></label></div>
                <div style="margin:0 0 0 180px;"><input type="radio" style="font-size: 20px;" id="cinsiyet" name="cinsiyet" value="1">KADIN<br>
                    <input type="radio" style="font-size: 20px;" id="cinsiyet" name="cinsiyet"  value="2">ERKEK</button></div>
                </div>
            <div style="margin:20px 0 20px 0;">
                <div style="margin:0 0 0 250px;"><button type="submit" style="font-size: 20px;width:230px;height:50px;color:#16423C;background-color:#6A9C89;border:5px solid;float:left;"><b>HESAPLA</b></button></div>
            </div>
        </div>
        </form>
        </div>';
kalori_hesaplama();
footer();
?>
