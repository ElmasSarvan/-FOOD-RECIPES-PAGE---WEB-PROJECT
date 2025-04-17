<?php
require_once "sayfa.php";
head_başlik();
menu();
        echo '<div id="article" style="background-color: #E9EFEC; width:1000px; height: 1230px;">
           <h1 style="color:#16423C;background-color: #E9EFEC;margin:0 0 0 20px;padding:0 0 5px 0;">Günlük Kalori İhtiyacı Nasıl Hesaplanır?</h1>
            <img src="resimler/günlük_kalori_ihtiyacı_hesaplama.jpg" width="400px" height="250px" style="margin:0 0 0 20px;float:left;">
            <p style="font-size:18px;margin:0 0 0 440px;">Günlük kalori ihtiyacı farklı birçok faktör göz önünde bulundurularak hesaplanır. Bu faktörler arasında <b>cinsiyet, günlük fiziksel aktivite oranı, yaş, boy, kilo gibi farklı etkenler bulunur.</b> Aynı şekilde günlük alınması gereken kalori miktarı kişinin hedefi doğrultusunda da değişiklik gösterir. <b>Kilo almak, kilo vermek ya da sahip olduğu kiloyu korumak isteyenler için amaca yönelik olacak şekilde kalori hesaplaması yapılır.</b>
                <br><br>
                Günlük kalori ihtiyacınızı hesaplamak için genel olarak <b>bazal metabolizma hızınızı (BMH) belirlemeniz ve günlük aktivite düzeyinizi</b> dikkate almanız gerekir. Hemen aşağıda erkekler ve kadınlar için ayrı ayrı belirlenmiş ölçülere göre günlük kalori ihtiyacı hesaplama formüllerini bulabilirsiniz.</p>

            <h1 style="color:#16423C;background-color: #E9EFEC;margin:0 0 0 20px;padding:0 0 5px 0;">Erkekler İçin Günlük Kalori Hesaplama</h1>
            <img src="resimler/erkekler.jpg" width="400px" height="250px" style="margin:0 0 0 20px;float:left;">
            <p style="font-size:18px;margin:0 0 0 440px;">Erkekler için günlük kalori ihtiyacı hesaplamada öncelikle bazal metabolizma hızını hesaplamak gerekir. Onun için de aşağıdaki formülü kullanabilirsiniz:
                <br><br>
                <b>Erkekler için bazal metabolizma hızı - 66.5+ (13.75 x vücut ağırlığı (kg)) + (5 x boy (cm.)) - (6.77 x yaş)</b>
                <br><br>
                Bu işlemin sonunda elde ettiğiniz bazal metabolizma hızını ise şu faktörlere göre günlük kalori ihtiyacınızı hesaplamak için kullanabilirsiniz. Bazal metabolizma hızınızı aktivite katsayınız ile çarpmalısınız. Bu, gün içinde yaptığınız aktivitelere göre değişkenlik gösterecektir elbette ama genel olarak aşağıdaki detaylar göz önünde bulundurularak şu şekilde hesaplanır:</p>
                <ul style="font-size: 18px;margin:0 0 0 20px;">
                    <li>Masa başı bir işi ve durağan bir yaşamı olanlar: Bazal metabolizma hızı × 1.2</li>
                    <li>Hafif düzeyde hareketli bir yaşamı olanlar: Bazal metabolizma hızı × 1.3</li>
                    <li>Orta düzeyde hareketli bir yaşamı olanlar ve genel olarak ayakta çalışanlar: Bazal metabolizma hızı × 1.4</li>
                    <li>Çok hareketli bir yaşamı olanlar ve düzenli spor yapanlar: Bazal metabolizma hızı × 1.5
                    </li>
                </ul>

            <h1 style="color:#16423C;background-color: #E9EFEC;margin:0 0 0 20px;padding:0 0 5px 0;">Kadınlar İçin Günlük Kalori Hesaplama</h1>
            <img src="resimler/kadınlar.jpg" width="400px" height="230px" style="margin:0 0 0 20px;float:left;">
            <p style="font-size:18px;margin:0 0 0 440px;">Kadınlar için günlük kalori hesaplama işleminde de öncelikle aşağıdaki formülle bazal metabolizma hızı hesaplanır:
                <br><br>
                <b>Kadınlar için bazal metabolizma hızı 655.1 + (9.56 x vücut ağırlığı (kg)) + (1.85 x boy (cm.)) - (4.67 x yaş)</b>
                <br><br>
                Bu işlemin sonunda elde ettiğiniz bazal metabolizma hızını ise şu faktörlere göre günlük kalori ihtiyacınızı hesaplamak için kullanabilirsiniz. Bazal metabolizma hızınızı aktivite katsayınız ile çarpmalısınız. Bu, gün içinde yaptığınız aktivitelere göre değişkenlik gösterecektir elbette ama genel olarak aşağıdaki detaylar göz önünde bulundurularak şu şekilde hesaplanır:</p>
                <ul style="font-size: 18px;margin:0 0 0 20px;">
                    <li>Masa başı bir işi ve durağan bir yaşamı olanlar: Bazal metabolizma hızı × 1.2</li>
                    <li>Hafif düzeyde hareketli bir yaşamı olanlar: Bazal metabolizma hızı × 1.3</li>
                    <li>Orta düzeyde hareketli bir yaşamı olanlar ve genel olarak ayakta çalışanlar: Bazal metabolizma hızı × 1.4</li>
                    <li>Çok hareketli bir yaşamı olanlar ve düzenli spor yapanlar: Bazal metabolizma hızı × 1.5</li>
                </ul>
            <h1 style="color:#16423C;background-color: #E9EFEC;margin:0 0 0 20px;padding:0 0 5px 0;">Bazal Metabolizma Hızı Nedir?</h1>
            <p style="font-size:18px;margin:0 0 0 20px;">Günlük kalori ihtiyacı hesaplamada çok önemli olduğunu yukarıda da vurguladığımız <b>bazal metabolizma hızı nedir</b> diye düşünenler için onu da hemen açıklamak isteriz: <b>Bazal metabolizma hızı,</b> vücudun dinlenme halindeyken ihtiyaç duyduğu enerji miktarını ifade eder. Bu enerji temel olarak vücudun kalp atışı, solunum, sindirim gibi temel fonksiyonlarını sürdürmek için harcanır. Bazal metabolizma hızı, namıdiğer BMH, kişinin cinsiyeti, yaşına, boyuna, kilosuna ve vücut bileşimine (kas kütlesi vs.) bağlı olarak değişkenlik gösterir. Genel olarak erkeklerin kadınlardan daha yüksek BMH'."'".'ye sahip olduğu ve dolayısıyla daha fazla enerjiye ihtiyaç duyduğu kabul edilir.</p>
        </div>';

echo '<div id="footer" style="background-color: #16423C; width:1000px; height:220px;">
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
?>