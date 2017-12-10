<html>
<head>
<title>Pizzerie di Bergamo</title>
<link href="stile.css" rel="stylesheet" type="text/css">
</head>
<body background class='background'>
<?
// Get cURL resource
$client_id="GCE5QLHTHPTXWBWRTEOPX0IDVF5XPQJXPHRFLOZZZW5DY51P";
$client_secret="Q3KYQNLRIR05WLGQHK2TGBOXDXZIGQA140DQ4KTIVWM4QNSH";
$url="https://api.foursquare.com/v2/venues/search?client_id=$client_id&client_secret=$client_secret&near=Bergamo,IT&v=20161016&query=pizza";
$quanti=100;
// Initialize session and set URL.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
// Get the response and close the channel.
$response = curl_exec($ch);

$response=json_decode($json);
echo("<table class='table'>");
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Latitudine</th>";
echo "<th>Longitudine</th>";
echo "</tr>";
for($k=0;$k<$quanti;$k++)
{
		echo("<tr>");
		echo("<td>").$response->response->venues[$k]->name.+"</td>";
		echo("<td>").$response->response->venues[$k]->lat.+"</td>";
		echo("<td>").$response->response->venues[$k]->lng.+"</td>";
		echo("</tr>");
		echo("</table>");
}

curl_close($ch);
?>

</body>
</link>
</html>
?>
