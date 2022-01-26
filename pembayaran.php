<?php
$inputbayar=$_POST['bayar'];
$totalahir=$_POST['totalahir'];

echo "<br>";
echo "<center";
echo"<h2><u>-PROSES PEMBAYARAN-</u></h2>";
echo"<table>";
echo"<tr>";
echo"<td>Total Harga Akhir</td> <td>:</td> <td>Rp.$totalahir</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Pembayaran</td> <td>:</td> <td>Rp.$inputbayar</td>";
echo"</tr>";

$kembalian = $inputbayar - $totalahir;
echo "<tr>";
echo "<td><h2>Kembalian</h2></td> <td>:</td> <td>Rp.$kembalian</td>";
echo "</td>";
echo "</table>";
echo "<br>";
echo "<a href='projek.php'>Back To Menu</a>";
echo "</center>";
?>