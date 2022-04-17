<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ARTIKEL RAIHAN</h1>
    <a href ="<?= base_url('index.php/Blog/add_blog') ?>"><button>+ add blog</button></a>
    <marquee><H2><font color='green'>Selamat</font> Datang <font color='red'>Di Artikel</font> Game<font color='blue'> Dunia</font>!!!</H2></marquee>
    <?php foreach ($blog as $bg){
    ?>
        <h2><?php echo $bg ['blog_judul'];?></h2>
        <img src="<?= base_url('gambar_blog/'.$bg['blog_cover']) ?>" alt="">
        <p><?php  echo $bg ['blog_content'];?></p>
        <p><font color="red">Penulis :</font><?php  echo $bg ['blog_penulis'];?></p>
        <p><?php  echo $bg ['blog_tgl'];?></p>
        <button><a href="<?= base_url('index.php/blog/delete/'.$bg['blog_id'])?>"> Hapus </a></button>

        <?php
        }
        ?>
</body>
</html>