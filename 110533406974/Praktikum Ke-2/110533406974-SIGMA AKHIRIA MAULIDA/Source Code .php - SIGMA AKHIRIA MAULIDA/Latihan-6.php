<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fungsi Prosedur</title>
</head>

<body>

<?php
//contoh prosedur
function do_print(){
	//Mencetak informasi timestamp
	echo time();
	}
	
//Memanggil prosedur
do_print();

echo '<br/>';

//Contoh fungsi penjumlahan
function jumlah($a, $b){
	return ($a+$b);
	}
	
echo jumlah(2, 3);
//output: 5
?>

</body>
</html>
