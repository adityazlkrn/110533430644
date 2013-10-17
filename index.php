<html>
<head>
    <title>Kalkulator 1</title>
</head>
<body>
    <center> <b>Program Kalkulator</b> </center>
    <form action="hasil.php" method="post">
        Bilangan 1 = <input type="text" name="bil1" id="bil1" size="5"> <!-- variable 1 --> <br>
        Bilangan 2 = <input type="text" name="bil2" id="bil2" size="5"> <!-- variable 2 --> <br>
        <!-- perintah perhitungan kalkulator -->
        <br>
        <input type="submit" name="submit1" value="jumblah"> <!-- tombol penjumblahan -->
        <input type="submit" name="submit2" value="kurang">  <!-- tombol perkurangan -->
        <input type="submit" name="submit3" value="kali">    <!-- tombol perkalian -->
        <input type="submit" name="submit4" value="bagi">    <!-- tombol pembagian -->
        <input type="reset" name="reset" value="reset">      <!-- tombol reset -->
    </form>
</body>
</html>