<?php
include "../koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['judul']));
$kategori = $_POST['kategori'];
$headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
$pengirim = addslashes (strip_tags ($_POST['pengirim']));
//insert ke tabel
$query = "INSERT INTO berita
VaLUES('','$kategori','$judul','$headline','$isi_berita','$pengirim', now())";
$sql = mysqli_query ($link,$query); if ($sql) {
echo "<script> alert('Berita telah berhasil ditambahkan');
window.location = 'index.php';</script>";
} else {
echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Surat Kabar UNIMUS</title>
<link rel="stylesheet" href="style.php">
</head>
<div class="KotakBG2">
<body>
<?php include "header.php";
include "menu.php";?>
<div class="KotakBG2">
<div class="KotakBG">
<div class="Ketikan1">
<FORM aCTION="" METHOD="POST" NaME="input">
<table cellpadding="0" cellspacing="0" border="0" width="700">
<tr>
<td colspan="2"><h2>Input Berita</h2></td>
</tr>
<tr>
<td width="300">Judul Berita</td>
<td>: <input type="text" name="judul" size="40" required><br><br> </td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori">
<?php
$query = "SELECT id_kategori, nm_kategori FROM kategori
ORDER BY nm_kategori";
$sql = mysqli_query ($link,$query);
while ($hasil = mysqli_fetch_array ($sql)) {
echo "<option
value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
}
?>
</select><br><br></td>
</tr>
<tr>
<td>Headline Berita</td>
<td>: <textarea name="headline" cols="40" rows="4"
required></textarea><br><br></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>: <textarea name="isi" cols="40" rows="10"
required></textarea><br><br></td>
</tr>
<tr>
<td>Pengirim</td>
<td>: <input type="text" name="pengirim" size="40"><br><br></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input"
value="Input Berita">&nbsp;
<input type="reset" name="reset" value="Cancel">
</td>
</tr>
</table>
</FORM>
<?php include "footer.php"; ?>
</body>
</html>
