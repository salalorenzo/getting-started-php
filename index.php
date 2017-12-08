<?
$client_id="GCE5QLHTHPTXWBWRTEOPX0IDVF5XPQJXPHRFLOZZZW5DY51P";
$client_secret="Q3KYQNLRIR05WLGQHK2TGBOXDXZIGQA140DQ4KTIVWM4QNSH";
$r = new HttpRequest('GET https://api.foursquare.com/v2/venues/search', HttpRequest::METH_GET);
//$r->setOptions(array('lastmodified' => filemtime('local.rss')));
$r->addQueryData(array('client_id' =>"$client_id".'&client_secret'=>"$client_secret".'&near=Bergamo,IT&query=pizza'));
/*try {
    $r->send();
    if ($r->getResponseCode() == 200) {
        file_put_contents('local.rss', $r->getResponseBody());
    }
} catch (HttpException $ex) {
    echo $ex;
}*/

?>
