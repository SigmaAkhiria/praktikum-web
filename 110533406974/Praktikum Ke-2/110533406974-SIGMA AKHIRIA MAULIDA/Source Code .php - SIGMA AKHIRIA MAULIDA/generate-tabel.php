<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Generate Tabel</title>
</head>

<body>

<?php

function Tabel($baris, $kolom)
{
echo "<h2>Tabel $baris baris dan $kolom kolom</h2>";
echo "<table width = \"40%\" border=\"1\">\n";

for($b = 0; $b < $baris; $b++) {
echo "<tr>\n";

for($k = 0; $k < $kolom; $k++) {
echo "<td height=\"20\" width=\"7%\"></td>\n";
}
echo "</tr>\n";
}
echo "</table>\n";
}
echo Tabel(3,4); //memanggil fungsi Tabel

?>
</body>
</html>
