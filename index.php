<html>
<head>
<title>Pizzerie di Bergamo</title>
<link href="stile.css" rel="stylesheet" type="text/css">
<script>
function funzione()
	{	
		var q=document.getElementById("quanti").value;
		return q;
	}
</script>
</head>
<body background class='background'>
<?
if(isset($_POST["quanti"]))
	{
		$quanti=$_POST["quanti"];
	}
else
	{
		$quanti=10;
	}
$url="https://api.foursquare.com/v2/venues/search?client_id=GCE5QLHTHPTXWBWRTEOPX0IDVF5XPQJXPHRFLOZZZW5DY51P&client_secret=Q3KYQNLRIR05WLGQHK2TGBOXDXZIGQA140DQ4KTIVWM4QNSH&near=Bergamo,IT&v=20161016&query=pizza";
$quanti=100;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$json = curl_exec($ch);

$risposta=json_decode($json);
echo("<table>");
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Latitudine</th>";
echo "<th>Longitudine</th>";
echo "</tr>";
for($k=0;$k<$quanti;$k++)
{
		echo("<tr>");
		echo("<td>").$risposta->response->venues[$k]->name.+"</td>";
		echo("<td>").$risposta->response->venues[$k]->location->lat.+"</td>";
		echo("<td>").$risposta->response->venues[$k]->location->lng.+"</td>";
		echo("</tr>");
}
echo("</table>");
curl_close($ch);
	
echo "<form id='forma' method='post' onsubmit='return funzione();'><br/>";
echo "Numero elementi (1-50):<input type='text' value='$quanti' name='quanti'id='quanti'/>";
echo "<input type='submit' value='Ricerca'/>";	
echo "</form>"
?>

</body>
</link>
</html>

