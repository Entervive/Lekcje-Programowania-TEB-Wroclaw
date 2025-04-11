<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>Sprawdzian | Rezultat zapytania</title>
</head>

<body>

<table width="90%" align="center" border="1" bordercolor="#d5d5d5" cellpadding="0" cellspacing="0">     
<tr>
<?php 
ini_set( "display_errors", 0);
require_once "dbconnect.php";
$polaczenie = mysqli_connect($host,$user,$password);
mysqli_query($polaczenie, "SET CHARSET utf8");
mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
mysqli_select_db($polaczenie, $database);

$zapytanietxt = file_get_contents("zapytanie.txt");

$rezultat = mysqli_query($polaczenie, $zapytanietxt);
$ile = mysqli_num_rows($rezultat);

echo "znaleziono: ".$ile;
if ($ile>=0) 
{
echo<<<END
<td width="50" align="center" bgcolor="e5e5e5">idklienta</td>
<td width="100" align="center" bgcolor="e5e5e5">imie</td>
<td width="100" align="center" bgcolor="e5e5e5">nazwisko</td>
<td width="100" align="center" bgcolor="e5e5e5">dowod</td>
<td width="100" align="center" bgcolor="e5e5e5">adres</td>
<td width="100" align="center" bgcolor="e5e5e5">miasto</td>
<td width="100" align="center" bgcolor="e5e5e5">plec</td>
<td width="50" align="center" bgcolor="e5e5e5">idauta</td>
<td width="100" align="center" bgcolor="e5e5e5">marka</td>
<td width="100" align="center" bgcolor="e5e5e5">model</td>
<td width="100" align="center" bgcolor="e5e5e5">przebieg</td>
<td width="100" align="center" bgcolor="e5e5e5">rocznik</td>
<td width="100" align="center" bgcolor="e5e5e5">kolor</td>
<td width="100" align="center" bgcolor="e5e5e5">ubezpieczenie</td>
<td width="50" align="center" bgcolor="e5e5e5">idwyp</td>
<td width="100" align="center" bgcolor="e5e5e5">datawyp</td>
<td width="100" align="center" bgcolor="e5e5e5">datazwrotu</td>
<td width="100" align="center" bgcolor="e5e5e5">naleznosc</td>
</tr><tr>
END;
}

	for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($rezultat);
		$a1 = $row['idklienta'];
		$a2 = $row['imie'];
		$a3 = $row['nazwisko'];		
		$a4 = $row['dowod'];
		$a5 = $row['adres'];
		$a6 = $row['miasto'];
		$a7 = $row['plec'];
		$a8 = $row['idauta'];
		$a9 = $row['marka'];
		$a10 = $row['model'];
		$a11 = $row['przebieg'];	
		$a12 = $row['rocznik'];	
		$a13 = $row['kolor'];	
		$a14 = $row['ubezpieczenie'];	
		$a15 = $row['idwyp'];	
		$a16 = $row['datawyp'];
		$a17 = $row['datazwrotu'];
		$a18 = $row['naleznosc'];

		
echo<<<END
<td width="50" align="center">$a1</td>
<td width="100" align="center">$a2</td>
<td width="100" align="center">$a3</td>
<td width="100" align="center">$a4</td>
<td width="100" align="center">$a5</td>
<td width="100" align="center">$a6</td>
<td width="100" align="center">$a7</td>
<td width="100" align="center">$a8</td>
<td width="100" align="center">$a9</td>
<td width="50" align="center">$a10</td>
<td width="100" align="center">$a11</td>
<td width="100" align="center">$a12</td>
<td width="100" align="center">$a13</td>
<td width="50" align="center">$a14</td>
<td width="100" align="center">$a15</td>
<td width="100" align="center">$a16</td>
<td width="100" align="center">$a17</td>
<td width="100" align="center">$a18</td>
</tr><tr>
END;
			
	}
	

?>


</tr></table>



</body>
</html>
