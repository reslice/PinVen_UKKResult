<?php

   if(isset($_POST['submit'])){
    $tanggalAwal = $_POST['awal'];
    $tanggalAkhir = $_POST['akhir'];

   }
   else {
       echo "kosong";
   }
   

   require_once "../autoload.php";
   require_once $BASE_URL . "models/inventaris.php";
   require_once $BASE_URL . "models/level.php";
   require_once $BASE_URL . "models/ruang.php";
   require_once $BASE_URL . "models/jenis.php";
   require_once $BASE_URL . "models/detail-pinjam.php";
   
   @$caridetailPinjam = $_GET['caridetailPinjam'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../css/style.css">
   <title>PinVen</title>
   <style>
       @media print{
           button {
               display:none;
               margin: auto;
           }
       }
       p.tanggal{
           padding: .5rem;
           text-align: center;
           margin: 0 auto;
           font-size:1em;
       }
       button {
               width: 10%;
               height: 3rem;
               display: inline-bold;
               margin: 1rem 45rem;
               background-color: rgba(36, 36, 36, 0.438);
               border: 0px solid #333;
               font-weight: 500;
           }
   </style>
</head>
<body>
   <?php require_once "../partial/_header.php" ?>
   <h1 align="center" > Laporan </h1>
   <br>
   <p class="tanggal">Tanggal Cetak : <?= date('Y-m-d') ?></p>
   <p class="tanggal">Petugas       : <?= $_SESSION['nama_user']?></p><br>
   <table border="1">
       <tr>
           <td>No</td> 
           <td>Nama Pegawai</td>
           <td>Tanggal Pinjam</td>
           <td>Tanggal Kembali</td>
           <td>Status Peminjaman</td>
           <td>Barang</td>  
           <td>Jumlah</td>        
       </tr>
       <?php $no=1; 
           foreach($detailPinjam->between($tanggalAwal,$tanggalAkhir) as $data) { ?>
       <tr>    
           <td><?= $no++ ?></td>
            <td><?= $data['nama_pegawai'] ?></td>
            <td><?= $data['tanggal_pinjam']?></td>
            <td><?= $data['tanggal_kembali']?></td>
            <td><?= $data['status_peminjaman']?></td>
            <td><?= $data['nama']?></td>
            <td><?= $data['jumlah']?></td>

       </tr>
        <?php   }
        ?>

   </table>

   <button onclick="print()"> Cetak Sekarang </button>
</body>
</html>
