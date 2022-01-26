
<?php
if(isset($_POST['kirim'])){
$pilih = $_POST["tiket"];
$jumlah = $_POST["jumlah"];

$diskon;
$jumlahdiskon;

if($pilih == 1){
    echo "<h2>Bukit Bintang</h2>";
    $harga = 10000;
}elseif($pilih == 2){
    echo "<h2>Pantai Sadranan</h2>";
    $harga = 15000;
}elseif($pilih == 3){
    echo "<h2>Candi Borobudur</h2>";
    $harga = 50000;
}elseif($pilih == 4){
    echo "<h2>Candi Prambanan</h2>";
    $harga = 50000;
}elseif($pilih == 5){
    echo "<h2>Keraton Yogyakarta</h2>";
    $harga = 5000;
}elseif($pilih == 6){
    echo "<h2>Malioboro</h2>";
    $harga = 5000;    
}elseif($pilih == 7){
    echo "<a href='cafe.php'></a>";
    $harga = 0;
}elseif($pilih == 8){
    echo "<h2>Goa Pindul</h2>";
    $harga = 100000;
}
echo "<h3> Diskon </h3>";
if ($jumlah >= 5){
    $diskon = 0.05;
    $jumlahdiskon = $harga * $jumlah * $diskon;
    echo "Anda Mendapatkan Diskon 5%<br>";
}elseif ($jumlah >= 10){
    $diskon = 0.10;
    $jumlahdiskon = $harga * $jumlah * $diskon;
    echo "Anda Mendapatkan Diskon 10%<br>";
}elseif ($jumlah < 5){
    $diskon=0;
    $jumlahdiskon = $harga * $jumlah * $diskon;
    echo "Maaf Anda Tidak Mendapatkan Diskon<br>";
}else{
    echo "ERROR";
}

$total = ($harga * $jumlah) - $jumlahdiskon;
$totalahir = $total - $jumlahdiskon;

echo "Total harga:Rp.$total<br>";
echo "Total Diskon:$jumlahdiskon<br>";
echo "Total Bayar:Rp.$totalahir";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="pembayaran.php" method="post">
        <label for="bayar">Bayar : </label>
        <input type="number" name="bayar">
        <input type="hidden" name="totalahir" value="<?php echo($totalahir)?>">
        <input type="submit" name="kirim" value="Kirim">
    </form>
    <form action="cafe.php" method="post">
        <input type="hidden" name="totalahir" value="<?php echo($totalahir)?>">
    </form>
</body>
</html>