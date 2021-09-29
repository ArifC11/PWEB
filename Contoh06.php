<html>

 <head>
 <title> Menghitung Luas Lingkaran</title>
 </head>
 <body>
    <?php
        //konstanta untuk nilai judul
        define("JUDUL","Hitung Luas Lingkaran");
        //konstanta untuk nilai phi
        define("PHI",3.14);
        $r = 10;
        echo JUDUL;
        echo "<br> Jari-jari : $r <br>";
        $luas = PHI*$r*$r;
        echo "Luas Lingkaran = $luas";
?>
</body>
</html
