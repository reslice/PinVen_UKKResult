<?php 

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
</head>
<body>
    <?php require_once "../partial/_header.php" ?>
    <br>
    <form align="center"  action="?search=<?=$caridetailPinjam?>" methode="get">
        <input type="text" name="caridetailPinjam" id="" placeholder="Cari Inventaris">
        <input class="search" type="submit" value="Cari">
    </form>
    <br>
    <hr>
    <h3 > List Pengembalian </h3>
    <table border="1">
        <tr style="background-color:#333;color:#fff">
            <td>No</td> 
            <td>Nama Pegawai</td>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
            <td>Status Peminjaman</td>
            <td>Barang</td>  
            <td>Jumlah</td>        
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($caridetailPinjam)){
            foreach($detailPinjam->withAll() as $data) { ?>
        <tr>    
            <td><?= $no++ ?></td>
             <td><?= $data['nama_pegawai'] ?></td>
             <td><?= $data['tanggal_pinjam']?></td>
             <td><?= $data['tanggal_kembali']?></td>
             <td><?= $data['status_peminjaman']?></td>
             <td><?= $data['nama']?></td>
             <td><?= $data['jumlah']?></td>

                <td>
                    <?php 
                        if($data['status_peminjaman'] == "Belum Kembali"){ ?>

                            <a onclick="confirm('Yakin Ingin Kembalikan ?')
                                if(true){
                                    location.href = 'pengembalian.php?id=<?=$data['id_detail_pinjam']?>';
                                }
                            ">Kembalikan</a>

                    <?php        
                        }
                        else {
                            echo "Selesai";
                        }
                    ?>
                </td>
        </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>

</body>

</html>