<?php
         include "../koneksi.php";
         if (isset($_GET['id'])) {
            $id_berita = $_GET['id'];
        } else {
            die ("Error. No Id Selected! ");
            }
?>
<html>
    <head>
        <title>Surat Kabar UNIMUS</title>
            <link rel="stylesheet" href="style.php">
    </head>
            <div class="KotakBG2">
    <body>
         <?php include "header.php";
                include "menu.php";?>
            <div class="KotakBG2">
                <div class="KotakBG">
                    <div class="Ketikan1">
                       <br><br>
                        <h2>Berita Lengkap</h2>
    <?php
        $query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.pengirim, A.tanggal FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori && A.id_berita='$id_berita'";
            $sql = mysqli_query ($link,$query);
            $hasil = mysqli_fetch_array ($sql);
            $id_berita = $hasil['id_berita'];
            $kategori = stripslashes ($hasil['nm_kategori']);
            $judul = stripslashes ($hasil['judul']);
            $isi = nl2br(stripslashes ($hasil['isi']));
            $pengirim = stripslashes ($hasil['pengirim']);
            $tanggal = stripslashes ($hasil['tanggal']);
    //
    //tampilkan berita
        echo "<font size=5 color=blue>$judul</font><br>"; echo "<small>Berita dikirimkan oleh <b>$pengirim</b> pada tanggal <b>$tanggal</b> dalam kategori <b>$kategori</b></small>"; echo "<p>$isi</p>";
?>
<?php include "footer.php"; ?>
</body>
</html>
