<?php
include "koneksi.php";
?>
<html>
<head><title>Surat Kabar UNIMUS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "header.php";
include "menu.php"; ?>
<br><br>
<h2>Halaman Depan ~ Lima Berita Terbaru</h2>
<?php
$query = "SELECT a.id_berita, B.nm_kategori, a.judul, a.headline, a.pengirim,
a.tanggal
FROM berita a, kategori B WHERE a.id_kategori=B.id_kategori
ORDER BY a.id_berita DESC LIMIT 0,5";
$sql = mysqli_query ($link,$query);
while ($hasil = mysqli_fetch_array ($sql)) {
$id_berita = $hasil['id_berita'];
$kategori = stripslashes ($hasil['nm_kategori']);
$judul = stripslashes ($hasil['judul']);
$headline = nl2br(stripslashes ($hasil['headline']));
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);
//
//tampilkan berita
echo "<font size=4><a
href='berita_lengkap.php?id=$id_berita'>$judul</a></font><br>";
echo "<small>Berita dikirimkan oleh <b>$pengirim</b>
pada tanggal <b>$tanggal</b> dalam kategori
<b>$kategori</b></small>";
echo "<p>$headline</p>";
echo "<hr>";
}
?>
<?php include "footer.php"; ?>
</body>
</html>