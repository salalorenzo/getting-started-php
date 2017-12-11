<html>
<head>
<title>Pizzerie di Bergamo</title>
<link href="stile.css" rel="stylesheet" type="text/css">
</head>
<body background class='background'>
<?
$lim=50;
$url="https://api.foursquare.com/v2/venues/search?client_id=GCE5QLHTHPTXWBWRTEOPX0IDVF5XPQJXPHRFLOZZZW5DY51P&client_secret=Q3KYQNLRIR05WLGQHK2TGBOXDXZIGQA140DQ4KTIVWM4QNSH&.$lim.&near=Bergamo,IT&v=20161016&query=pizza";
	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$json = curl_exec($ch);

$risposta=json_decode($json);
echo("<table border='1px'>");
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Latitudine</th>";
echo "<th>Longitudine</th>";
echo "</tr>";
if(count($risposta->response->venues)<$lim)
	$lim=count($risposta->response->venues);
for($k=0;$k<$lim;$k++)
{
		echo("<tr>");
		echo("<td>").$risposta->response->venues[$k]->name."</td>";
		echo("<td>").$risposta->response->venues[$k]->location->lat."</td>";
		echo("<td>").$risposta->response->venues[$k]->location->lng."</td>";
		echo("</tr>");
}

echo("</table>");
curl_close($ch);

?>

</body>
</link>
</html>

