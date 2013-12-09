<html>
<head>
    <title>Hasil</title>
</head>
<body>
    <?php
        $bil1 = $_REQUEST["bil1"]; //variable 1
        $bil2 = $_REQUEST["bil2"]; //variable 2

        //proses pemilihan exekusi perintah
        if ($_POST["submit1"]) {
            $hasil = $bil1+$bil2;
            echo "Hasil Penjumblahan = ",$hasil;
        }
        elseif ($_POST["submit2"]) {
            $hasil = $bil1-$bil2;
            echo "Hasil Pengurangan = ",$hasil;
        }
        elseif ($_POST["submit3"]) {
            $hasil = $bil1*$bil2;
            echo "Hasil Perkalian = ",$hasil;
        }
        elseif ($_POST["submit4"]) {
            $hasil = $bil1/$bil2;
            echo "Hasil Pembagian = ",$hasil;
        }
    ?>
</body>
</html>