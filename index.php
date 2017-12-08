<?
// Get cURL resource
$curl = curl_init();
$client_id="GCE5QLHTHPTXWBWRTEOPX0IDVF5XPQJXPHRFLOZZZW5DY51P";
$client_secret="Q3KYQNLRIR05WLGQHK2TGBOXDXZIGQA140DQ4KTIVWM4QNSH";
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://api.foursquare.com/v2/venues/search?client_id=$client_id&client_secret=$client_secret&near=Bergamo,IT&query=pizza&v=20170801"
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
echo ("$resp");
// Close request to clear up some resources
curl_close($curl);
?>
