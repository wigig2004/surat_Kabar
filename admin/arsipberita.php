<?php
    include "../koneksi.php";
?>
<html>
    <head><title>Arsip Berita</title>
        <link rel="stylesheet" href="style.php">
        <script language="javascript"> function tanya() {
    if (confirm ("apakah anda yakin akan menghapus berita ini ?")) {
        return true;
    } else { return false;
    }
}
</script>
</head>
    <body>
        <div class="KotakBG2">
            <div class="KotakBG">
                <div class="Ketikan1">
                <br><br>
                    <h1>Arsip Berita</h1>
                    <h3>deskripsi</h3>
                    <h3>ini adalah berita atau informasi yang ada di unimus</h3>
                    <ol>
<?php
    $query = "SELECT a.id_berita, B.nm_kategori, a.judul, a.pengirim, a.tanggal FROM berita a, kategori B WHERE a.id_kategori=B.id_kategori ORDER BY a.id_berita DESC";
        $sql = mysqli_query ($link,$query);
            while ($hasil = mysqli_fetch_array ($sql)) {
                $id_berita = $hasil['id_berita'];
                $kategori = stripslashes ($hasil['nm_kategori']);
                $judul = stripslashes ($hasil['judul']);
                $pengirim = stripslashes ($hasil['pengirim']);
                $tanggal = stripslashes ($hasil['tanggal']);

//tampilkan arsip berita

                echo "<h2><li><a href='berita_lengkap.php?id=$id_berita'>$judul</a></h2><br>";
                echo "<h4><small>Berita dikirimkan oleh <b>$pengirim</b> pada tanggal
                    <b>$tanggal</b> dalam kategori
                        <b>$kategori</b></h4><br>";
                            echo "<b><h4>Action : </b><a href='edit_berita.php?id=$id_berita'>Edit</a> | ";
                echo "<a href='delete_berita.php?id=$id_berita' onClick='return
                tanya()'>Delete</a>";
                echo "</small></li><br><br>";
        }
?>
                </ol>
            </div>
        </div>
        </div>
    </body>
</html>
