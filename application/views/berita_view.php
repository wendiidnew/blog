<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berita Terkini</h1>
    <button><a href=<?= base_url('index.php/berita/add_berita/') ?>>Tambah</a></button>
    <br><br>
    <table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Judul Berita</th>
        <th>isi Berita</th>
        <th>Penulis Berita</th>
        <th>Tanggal Berita</th>
        <th>Lokasi Berita</th>
        <th>Id Kategori</th>
        <th>Foto Berita</th>
        <th>aksi</th>
    </tr>
    <?php
        foreach ($berita as $bt){
            ?>
            <tr>
           <center><td><?= $bt ['berita_id'];?></td></center> 
           <center><td><?= $bt ['berita_judul'];?></td></center> 
           <center><td><?= $bt ['berita_isi'];?></td></center> 
           <center><td><?= $bt ['berita_penulis'];?></td></center>
           <center><td><?= $bt ['berita_tanggal'];?></td></center>
           <center><td><?= $bt ['berita_lokasi'];?></td></center> 
           <center><td><?= $bt ['kategori_id'];?></td></center>
           <center><td><?= $bt ['berita_foto'];?></td></center> 

           <td>EDIT //
            <a href ="<?= base_url('index.php/berita/delete/'.$bt['berita_id'])?>"> Hapus </a>
            </td>
            </tr>
            <?php
        }
        ?>
</body>
</html>