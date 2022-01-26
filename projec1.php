<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
    <h1 align="center">Destinasi Wisata Yogyakarta</h1>
    <form action="" method="post">
        <table align=center>
        <tr>
            <th></th>
            <th align="left"><u>Destinasi</u></th>
            <th><u>Harga Tiket</u></th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Bukit Bintang</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Pantai Sadranan</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Candi Borobudur</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Candi Prambanan</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Keraton Yogyakarta</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Malioboro</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendopo Lawas</td>
            <td>cafe</td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Goa Pindul</td>
            <td>Rp. 100.000</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
            <tr>
                <td></td>
                <td><select name="destinasi" id="">
                    <option selected>Pilih Destinasi</option>
                    <option value="1">Bukit Bintang</option>
                    <option value="2">Pantai Sadranan</option>
                    <option value="3">Candi Borobudur</option>
                    <option value="4">Candi Prambanan</option>
                    <option value="5">Keraton Yogyakarta</option>
                    <option value="6">Malioboro</option>
                    <option value="7">Pendopo Lawas -> Cafe</option>
                    <option value="8">Goa Pindul</option>
                </select></td>
                <td><input type="submit" value="Kirim" name="proses"></td><hr>
            </tr>
        </table>
        <hr>
        <?php
            if (isset($_POST['proses'])) {
                $destinasi = $_POST['destinasi'];
                if ($destinasi == '1') {
                    ?>
                  <h2 align="center">Bukit Bintang</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 10.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Pembayaran</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="kirim" value="Kirim"></td>
                    </tr>
                  </table>
    
          <?php
                } elseif ($destinasi == '2') { ?>
                  <h2 align="center">Pantai Sadrana</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Pantai Sadrana</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 15.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="submit" value="Kirim"></td>
                    </tr>
                  </table>
                    
          <?php } elseif ($destinasi == '3') { ?>
                  <h2 align="center">Candi Borobudur</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 50.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                
          <?php } elseif ($destinasi == '4') { ?>
                  <h2 align="center">Candi Prambanan</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 50.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                 
          <?php } elseif ($destinasi == '5') { ?>
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Keraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 15.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
           
          <?php } elseif ($destinasi == '6') { ?>
                  <h2 align="center">Malioboro</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 5.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                
         <?php } elseif ($destinasi == '7') { ?>
                  <h2 align="center">Pendopo Lawas -> Cafe</h2>
                  <h3 align="center">Silahkan Pilih Menu Makanan dan Minuman</h3>
                  <center>
                    <h2>MENU</h2>
                  <table>
                       <tr>
                         <th><u>Makanan</u></th>
                         <th><u>Harga</u></th>
                       </tr>
                       <tr>
                         <td>Chicken</td>
                         <td>Rp. 15.000</td>
                       </tr>
                       <tr>
                         <td>Seblak</td>
                         <td>Rp. 10.000</td>
                       </tr>
                       <tr>
                         <td>Mie Goreng</td>
                         <td>Rp. 13.000</td>
                       </tr>
                       <tr>
                         <th><u>Minuman</u></th>
                         <th><u>Harga</u></th>
                       </tr>
                       <tr>
                         <td>Pop Ice</td>
                         <td>Rp. 13.000</td>
                       </tr>
                       <tr>
                         <td>Cappucino</td>
                         <td>Rp. 11.000</td>
                       </tr>
                       <tr>
                         <td>Dawet</td>
                         <td>Rp. 12.000</td>
                       </tr>
                     </table>
                     </center>
                     <br>
                   
                     <div  class="cafe" align="center">
                         <table>
                           <tr>
                           <td>
                               <select name="pilih">
                               <option selected>Pilih Menu Makanan</option>
                               <option value="1">Chicken Katsu</option>
                               <option value="2">Seblak</option>
                               <option value="3">Mie Goreng</option>
                               </select>
                            </td>
                            <td>
                                <select name="pilih">
                                <option selected>Pilih Menu Minuman</option>
                                <option value="4">Pop Ice</option>
                                <option value="5">Cappucino</option>
                                <option value="6">Dawet</option>
                                </select>
                            </td>
                        </td>
                         </tr>
                         <tr>
                        <td><input type="number" name="jumlah1" placeholder="Jumlah Makanan"></td>
                        <td><input type="number" name="jumlah2" placeholder="Jumlah Minuman"></td>
                        </tr>
                        <tr>
                        <td><input type="number" name="bayar" placeholder="Uang Pembayaran"></td>
                        </tr>
                        <tr>
                        <td><input type="submit" name="cafe" value="Kirim"></td>
                        </tr>
                        </table>
                     </div>
                     
         <?php } elseif ($destinasi == '8') { ?>
                  <h2 align="center">Goa Pindul</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Goa Pindul</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 100.000 /Orang</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="goa" value="Kirim"></td>
                    </tr>
                  </table>
                    
          <?php }
            }
            if (isset($_POST['kirim'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 10000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?> 
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                  <td>Uang Pembayaran<hr></td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['submit'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 15000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                  <td>Uang Pembayaran<hr></td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
         <?php
            }
            if (isset($_POST['ok'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 50000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                  <td>Uang Pembayaran<hr></td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['ya'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 5000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                  <td>Uang Pembayaran<hr></td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['goa'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 100000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                  <td>Uang Pembayaran<hr></td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['cafe'])) {
                $pilih = $_POST['pilih'];
                $jumlah1 = $_POST['jumlah1'];
                $jumlah2 = $_POST['jumlah2'];
                $bayar = $_POST['bayar'];

                if ($pilih == 1) {
                    $total = $jumlah1 * 15000;
                    if ($jumlah1 >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah1 >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah1 >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 2) {
                    $total = $jumlah1 * 10000;
                    if ($jumlah1 >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah1 >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah1 >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 3) {
                    $total = $jumlah1 * 13000;
                    if ($jumlah1 >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah1 >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah1 >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 4) {
                    $total = $jumlah2 * 13000;
                    if ($jumlah2 >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah2 >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah2 >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 5) {
                    $total = $jumlah2 * 11000;
                    if ($jumlah2 >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah2 >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah2 >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 6) {
                    $total = $jumlah2 * 12000;
                    if ($jumlah2 >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah2 >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah2 >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                }
                $kembalian = $bayar - $totalakhir; ?>

               <table align="center">
                 <tr>
                   <td>Total Bayar</td>
                   <td>:</td>
                   <td><?php echo $totalakhir; ?></td>
                 </tr>
                 <tr>
                   <td>Diskon</td>
                   <td>:</td>
                   <td><?php echo $diskon1; ?></td>
                 </tr>
                 <tr>
                 <td>Uang Pembayaran<hr></td>
                   <td>:</td>
                   <td><?php echo $bayar; ?></td>
                 </tr>
                 <tr>
                   <td>Kembalian</td>
                   <td>:</td>
                   <td><?php echo $kembalian; ?></td>
                 </tr>
               </table>
          <?php
            }
          ?>
    </form>
</fieldset>    
</body>
</html>