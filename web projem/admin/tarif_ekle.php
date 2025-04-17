<?php
session_start();
if(isset($_SESSION["kullanıcı_adı"])){
    echo'
<!DOCTYPE html>
<html>
<head>
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form method="POST" action="tarif_islem.php">
Resimler<br><input type="text" name="resimler"><br>
Tarif Adı<br><textarea rows="20" cols="100" name="tarifler_baslik" id="tarifler_baslik"></textarea><br>
Tarifler<br><textarea rows="100" cols="100" name="tarifler" id="tarifler"></textarea><br>
Tarifler Yapılış<br></div><textarea rows="100" cols="100" name="tarifler_yapılış" id="tarifler_yapılış"></textarea><br>
Videolar<br><textarea rows="20" cols="100"name="videolar"></textarea><br>
<script>
         CKEDITOR.replace("tarifler_baslik"); 
         CKEDITOR.replace("tarifler"); 
         CKEDITOR.replace("tarifler_yapılış");
</script>
<input type="submit" value="Kaydet">
</form>  
</body>
</html>';
}
else{
    header("location:login.php");
}
?>

