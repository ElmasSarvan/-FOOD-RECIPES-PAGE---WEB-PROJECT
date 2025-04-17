<?php
$resimler = array("çorba.jpg", "balık.jpg", "salata.jpg", "meze.jpg", "airfryer.jpg", "sebze.jpg", "zeytinyağlı.jpg", "kahvaltılık.jpg", "kek.jpg", "kurabiye.jpg", "börek.jpg", "poğaça.jpg", "tatlı.jpg", "şerbetli_tatlı.jpg", "sütlü_tatlı.jpg", "pasta.jpg", "tavuk.jpg", "köfte.jpg", "et.jpg", "dolma_sarma.jpg", "mantı.jpg", "pilav.jpg", "makarna.jpg", "bakliyat.jpg", "sulu_yemek.jpg", "içecekler.jpg", "atıştırmalık.jpg", "video.jpg", "yöresel_yemekler.jpg");
$içerik = array("ÇORBA", "BALIK", "SALATA", "MEZE", "AİRFRYER", "SEBZE", "ZEYTİNYAĞLI", "KAHVALTILIK", "KEK", "KURABİYE", "BÖREK", "POĞAÇA", "TATLI", "ŞERBETLİ TATLI", "SÜTLÜ TATLI", "PASTA", "TAVUK", "KÖFTE", "ET", "DOLMA SARMA", "MANTI", "PİLAV", "MAKARNA", "BAKLİYAT", "SULU YEMEK", "İÇECEKLER", "ATIŞTIRMALIK", "VİDEO", "YÖRESEL TARİFLER");
$anasayfa = array("", "VİDEOLU TARİFLER", "KAÇ KALORİ?", "ÖĞREN", "KEŞFET");

function anasayfa2($anasayfa)
{
    require_once "fonksiyonlar.php";
    $baglanti = baglan();
    $sorgu = "SELECT * FROM `projem2`";
    $sonuc = mysqli_query($baglanti, $sorgu);
    for ($i = 1; $i <= 4; $i++) {
        $j=0;
        echo '<div id="section' . $i . '" style="background-color: #E9EFEC;" width="1000px" height="300px">';

        echo '<div width="1000px" height="100px"> 
                        <div style="float:left;padding: 0 0 0 50px;"><hr style="margin:30px 0 0 0;" width="300px"></div>
                        <div style="float:left;padding:0 30px;" width="300px" height="100px" class="section3"><a href="#"><h2 style="text-align: center;">' . $anasayfa[$i] . '</h2></a></div>
                        <div style="float:left;padding: 0 50px 0 0 ;"><hr style="margin:30px 0 0 0;" width="290px"></div>
                    </div>
                    <div style="clear:both;"></div>
                   <div style="background-color: #E9EFEC;">
                    <div class="carousel-container" style="position: relative;"> <button class="carousel-button left" onclick="scrollCarousel' . $i . '(-1)">&#10094;</button> <div class="carousel">
                    ';
        while ($satir = mysqli_fetch_array($sonuc)) {
            
            if(1){
            echo '<div class="carousel-item"><a href="altsayfa.php?id=' . $satir["projem_id"].' " style="text-decoration: none;"><img src="resimler/' . $satir["projem_resim"] . '" style="float:left;" width="150px" height="115px"><h3 style="margin:0 0 0 160px;">' . $satir["projem_baslık"] . '</h3></a></div>';
            $j++;
            }
            if($j==5){
                break;
            }
        }

        echo '<button class="carousel-button right" onclick="scrollCarousel' . $i . '(1)">&#10095;</button> </div>
                    </div>
       </div>
        <script> function scrollCarousel' . $i . '(direction) { const carousel = document.querySelector(' . "'" . '#section' . $i . ' .carousel' . "'" . '); const scrollAmount = 300; // Kaydırma mesafesini ayarlamak için bu değeri değiştirebilirsiniz 
        carousel.scrollBy({ left: direction * scrollAmount, behavior: ' . "'" . 'smooth' . "'" . '}); } </script>';
    }
    
}
function head_başlik()
{
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>FOOD RECİPES</title>
        <link rel="icon" type="image/png" sizes="96x57" href="favicon-96x96.png">
        <meta name="keywords" content="FOOD,FOOD RECİPES,Yemek Tarifleri,Yemek">
        <meta name="description" content="Dünya Mutfağı ve Yemek Tarifleri">
        <link rel="stylesheet" href="projem2.css">
        <link rel="stylesheet" href="new.css">
   
    </head>
    <body>';
}
function anasayfa()
{
    echo  ' <div id="article" style="background-color: #6A9C89; width:1000px; height: 300px;">
                <img src="anasayfa.jpeg" width="700px" height="300px;" style="margin:0px 200px 0px 150px;">
        </div>';
}

function menu()
{
    echo '<div class="A">
        <div class="div" id="header" width="1000px" height="200px">
            <a href="Projem.php" title="FOOD"><img src="Untitled_logo_2_free-file (1).jpeg" width="180px" height=120px style="padding:10px 50px;float:left;"></a>
            <div height="150px" width="320px" style="float:left;"></div>
            <div height="150px" width="320px" style="float:left;margin:50px 30px 0px 320px;">
                <input type="text" placeholder=" Search" style="font-size: 22px;border-radius: 5px;border: 5px solid #16423C;" width="150px" height="80px" >
                <button type="submit" style="background-color: #16423C;font-size: 22px;border-radius:5px;border:5px solid #16423C"><img src="büyüteç.jpeg" width="40px" height="20px"></button>
            </div>
        </div>
        <div id="section" style="background-color: #16423C; width:1000px; height: 50px;">
            <a href="menü.php" target="_self"><img src="menü.jpg" height="30px" style="float:left;padding:10px 0px 10px 15px;"></a>
            <div class="section2 a">
            <a  href="Projem.php">ANASAYFA</a>
            <a  href="yemek_tarifleri.php">YEMEK TARİFLERİ</a>
            <a  href="#">NE İYİ GİDER?</a>
            <a  href="kalori_hesaplama.php" >GÜNLÜK KALORİ İHTİYACI</a>
            <a  href="#">KAÇ KALORİ?</a>
            <a  href="#">ÖĞREN</a>
            <a  href="#">KEŞFET</a>
            </div>
        </div>';
}
function footer()
{
    echo '<div id="footer" style="background-color: #16423C; width:1000px; height: 250px;">
            <div>
                <div class="footer2">
                    <h2 class="footer">Müşteri Hizmetleri</h2>
                    <p class="footer"><b>Telefon=</b> +90 536 600 6835</p>
                    <p class="footer"><b>E-posta=</b> food_recipes@outlook.com</p>
                </div>
                <div class="footer3">
                    <h2 class="footer">İletişim</h2>
                    <p class="footer"><b>Adres=</b>Kuzeykent Mah. Bilgin Sokak No:10 <br>Kuzeykent
                    Mah./Merkez/Kastamonu</p>
                </div>
            </div>
            <div style="clear:both;"></div>
            <hr>
            <a href="#" class="footer1">
                <h3>Aydınlatma Metni</h3>
            </a>
            <a href="#" class="footer1">
                <h3>Kullanım Koşulları</h3>
            </a>
            <a href="#" class="footer1">
                <h3>Çerez Politikası</h3>
            </a>
            <a href="#" class="footer1">
                <h3>KVK ve Gizlilik Politikası</h3>
            </a>
            <br><br><br>
            <hr>
            <p class="footer" style="font-size: 14px;">2024 food_recipes.com. Tüm Hakları saklıdır.</p>
        </div>
    </div>
</body>
</html>';
}
function kalori_hesaplama()
{
    echo '<div id="section" style="background-color: #E9EFEC; width:1000px; height: 500px;">
            <h1 style="color:#16423C;background-color: #E9EFEC;margin:0 0 0 20px;padding:10px 0 5px 0;">Kalori Nedir ve Kalori Neden Önemlidir?</h1>
            <img src="resimler/kalori_nedir.jpg" width="400px" height="200px" style="margin:0 0 0 20px;">
            <p style="font-size:20px;margin:0 0 0 20px;">Günlük kalori ihtiyacı hesaplama ile ilgili detaylara geçmeden önce kalori nedir ve neden önemlidir anlatmak isteriz. Kalori, kısaca bir besinin vücudumuza enerji sağlayan birim ölçüsüdür. Daha bilimsel olarak açıklamak gerekirse 1 kalori, vücudun 1 gram suyunu 1 derece celsius artırmak için gereken enerji miktarına eşittir. Ancak günümüzde diyet listelerinde sıkça karşımıza çıkan, hesaplamamız beklenen kalori genel olarak kcal olarak sembolize edilen kilokaloridir.<br><br><b>Kalori neden önemlidir sorusuna gelince,</b> kalori günlük aktivitelerimizi gerçekleştirmemiz için gereken enerjiyi vücudumuza sağlar, bu da vücudumuzun hayatta kalabilmesini sağlar. Kısaca vücudumuzun temel fonksiyonlarını sürdürebilmek, kalp atışı, solunum, sindirim gibi işlevleri yerine getirebilmek ve fiziksel aktiviteleri gerçekleştirebilmek için kaloriye ihtiyacı vardır.</p>
        </div>
        <div id="nav" style="background-color: #E9EFEC; width:1000px; height: 130px;">
            <ul style="margin:0 0 0 20px;padding:20px 0 0 5px;">
                <li style="margin:0 0 0 10px;">
                <a href="kalori_ihtiyacı_nasıl_hesaplanır.php" style="text-decoration: none;font-size: 20px;color:#16423C;margin:0 0 0 10px;padding:20px 0 5px 0;"><b>Günlük Kalori İhtiyacı Nasıl Hesaplanır?</b></a>
                </li>
                <br>
                <li style="margin:0 0 0 10px;">
                    <a href="günlük_kalori ihtiyacı_nedir.php" style="text-decoration: none;font-size: 20px;color:#16423C;margin:0 0 0 10px;padding:20px 0 5px 0;"><b>Günlük Kalori İhtiyacı Nedir? Günde Kaç Kalori Almalıyım?</b></a>
                </li>
            </ul>
        </div>';
}
function yemek_tarifleri($resimler, $içerik)
{
    echo '<div id="section" style="background-color: #E9EFEC; width:1000px; height: 1200px;">
    <h1 style="font:bold;color: #16423C;margin:0 0 5px 250px;padding:;background-color: #E9EFEC;">YEMEK TARİFLERİ</h1>';
    for ($i = 0; $i < count($resimler); $i++) {
        echo '<div class="div1" >
        <a href="#" style="text-decoration:none;"><img src="resimler/' . $resimler[$i] . '" width="180px" height="100px">
        <h3 class="section">' . $içerik[$i] . '</h3></a></div>';
        if (($i == 0)) {
            continue;
        } else if (($i % 14) == 0) {
            echo '<div style="clear:both;"></div>';
        }
    }
    echo '</div>';
}
?>