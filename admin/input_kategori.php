<?php
include "../koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['judul']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
//insert ke tabel
$query = "INSERT INTO kategori VaLUES('','$judul','$isi_berita')";
$sql = mysqli_query ($link,$query);
if ($sql) {
echo "<script> alert('Kategori telah berhasil ditambahkan');
window.location = 'index.php';</script>";
} else {
echo "<h2><font color=red>Kategori gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Surat Kabar UNIMUS</title>
<link rel="stylesheet" href="style.php">
</head>
<body>
<div class="KotakBG2">
<?php include "header.php";
include "menu.php";?>
<div class="KotakBG2">
<div class="KotakBG">
<div class="Ketikan1">
<br><br>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="700">
<tr>
<td colspan="2">
    <h2>Input Kategori</h2></td>
</tr>
<tr>
<td width="auto">Kategori</td>
<td>: <input type="text" name="judul" size="30" required><br><br></td>
</tr>
<tr>
  
<td>Deskripsi Kategori</td>
<td>: <textarea name="isi" cols="30" rows="10" 
required></textarea><br><br></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input"
value="Input Kategori">&nbsp;
<input type="reset" name="reset" value="Cancel">
</td>
</tr>
</table>
</FORM>
<?php include "footer.php"; ?>
</body>
</html>