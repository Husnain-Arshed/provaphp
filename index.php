<html>
<head>
<title> Richiesta </title>
</head>
<body>
<!–Form html di input–>
<h2> Conversione in miglia </h2>
<form action=”” method=”get”> Lunghezza in km: <input type=”text” name=”km”><br>
<input type=”submit” value=”Converti”>
</form>

<?php
if($_GET) {


$miglia =$_GET[“km”]/1.6093;

echo “<h3> Chilometri = “.$_GET[“km”].”</h3>”;  echo “corrispondono a  Miglia : “;
echo ($miglia);
}
?>
</body> </html>
