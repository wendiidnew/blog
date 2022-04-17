<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ISI BERITA</h3>
    <form action="<?= base_url('index.php/berita/add_berita_act/') ?>" method="post">
    <label for="">judul Berita</label>
    <input type="text" name="berita_judul" id="berita_judul">
    <br><br>
    <label for="">Isi Berita</label>
    <textarea name="berita_isi" id="berita_isi" cols="30" rows="10"></textarea>
    <br><br>
    <label for="">Penulis Berita</label>
    <input type="text" name="berita_penulis" $id="berita_Penulis">
    <br><br>
    <label for="">Tanggal Berita</label>
    <input type="text" name="berita_tanggal" $id="berita_tanggal">
    <br><br>
    <label for="">Lokasi Berita</label>
    <input type="text" name="berita_lokasi" $id="berita_lokasi">
    <br><br>
    <label for="">kategori_id</label>
    <input type="text" name="kategori_id" $id="kategori_id">
    <br><br>
    <label for="">berita_foto</label>
    <input type="text" name="berita_foto" $id="berita_foto">
    <br><br>

    <br><br>
    <button type='submit'>
    simpan
    </button>
</body>
</html>