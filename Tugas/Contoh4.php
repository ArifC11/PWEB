<html>
    <head>
    <title> Contoh Skrip PHP </title>
    </head>
<body>
<?php 
   $nilai = 85;
   $nama = "Amir";
   if($nilai >= 80)
        {
            echo $nama." mendapat nilai A";
        }
    elseif($nilai >= 70)
        {
            echo $nama." mendapat nilai B";
        } 
    elseif($nilai >= 60)
        {
            echo $nama." mendapat nilai C";
        } 
    else
        {
            echo $nama." mendapat nilai D";
        } 
      
?>
</body>
</html>