<html>
<body>
<?php
$kampusku="STEKOM";
$alamatl="Jl. Majapahit 304 Semarang";
$alamat2="Jl. Majapahit 605 Semarang";
echo"<form action=\"linkform4.php\" method=\"post\">";
echo"Mengirim 3 variabel sekaligus ke halaman link4.php<br>";
echo"<input name=\"kampusku\" type=\"hidden\" value=\"$kampusku\">";
echo"<input name=\"alamatl\" type=\"hidden\" value=\"$alamatl\">";
echo"<input name=\"alamat2\" type=\"hidden\" value=\"$alamat2\">";
echo"<br><input name=\"kirim\" type=\"submit\" value=\"Kirimkan\">";
echo"</form>"
?>
</body>
</html>
