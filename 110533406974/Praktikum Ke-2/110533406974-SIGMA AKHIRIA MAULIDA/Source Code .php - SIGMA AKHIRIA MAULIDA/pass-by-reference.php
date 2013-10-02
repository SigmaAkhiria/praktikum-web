<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pass By Reference</title>
</head>

<body>
<?php
function jumlah(&$nilai) {
$nilai++;
}
$input=9;
jumlah($input);
echo $input;
?>
</body>
</html>
