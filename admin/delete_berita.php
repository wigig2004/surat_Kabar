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
            <title>Delete Berita</title>
<link rel="stylesheet" href="style.php">
        </head>
            <div class="KotakBG2">
        <body>
            <?php include "header.php";
                    include "menu.php"; ?>
                <div class="KotakBG2">
                    <div class="KotakBG">
                        <div class="Ketikan1"><?php
 //proses delete berita
             if (!empty($id_berita) && $id_berita != "") {
                $query = "DELETE FROM berita WHERE id_berita='$id_berita'";
                $sql = mysqli_query ($link,$query);
             if ($sql) {
                echo "<h2><font color=blue>Berita telah berhasil di hapus</font></h2>";
             } else {
                echo "<h2><font color=red>Berita gagal dihapus</font></h2>";
            }
                 echo "Klik <a href='index.php'>di sini</a> untuk kembali ke halaman arsip berita";

            } else {
                die ("access Denied");
            }
            include "footer.php"; ?>
</body>
</html>