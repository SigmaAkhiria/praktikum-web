<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tabel</title>
<style type="text/css">
<!--
#apDiv1 {
position:absolute;
width:178px;
height:24px;
z-index:1;
left: 284px;
top: 189px;
}
.style1 {
color: black;
font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post" action="Tabel2.php">
<h3 align="center" class="style1"><font color = "red" size = "14">Generate Tabel</font></h3>
<div align="center">
<table width="327" border="1" bgcolor = "blue">

<tr>
<td style="text-align:center"><label><font color = "red">Kolom</font></label></td>
<td><strong>= </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><font color = "red">Jumlah Sel</font></td>
<td><strong>= </strong>
<input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>

</table>
</div>
<div id="apDiv1">
<br/>
<br/>
<br/>
<input type="submit" name="Generate" value="Generate">
<input type="reset" name="Reset" value="Reset">
</div>
</form>
</body>

</html>