<?
// Get cURL resource
$client_id="GCE5QLHTHPTXWBWRTEOPX0IDVF5XPQJXPHRFLOZZZW5DY51P";
$client_secret="Q3KYQNLRIR05WLGQHK2TGBOXDXZIGQA140DQ4KTIVWM4QNSH";

$url="https://api.foursquare.com/v2/venues/search?client_id=$client_id&client_secret=$client_secret&near=Bergamo,IT";

// Initialize session and set URL.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
// Get the response and close the channel.
$response = curl_exec($ch);
curl_close($ch);

$response=json_decode($json);
echo("<table>");
echo("<tr>");
echo("<td>").$response->response->venues[0]->name.+"</td>";
echo("<td>").$response->response->venues[1]->lat.+"</td>";
echo("<td>").$response->response->venues[2]->lng.+"</td>";
echo("</tr>");
echo("</table>");
?>
