<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF";
$testresponse = "";
//echo $request["type"];
switch ($request["type"])
{
    case "searchpoke":
        $searchClient = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $searchRequest = array();
        $searchRequest['type'] = "searchpoke";
        $searchRequest['pokemonname'] = $_POST["pname"];
        $response = $searchClient->send_request($searchRequest);
    break;
    case "addpoke":
        $addClient = new rabbitMQClient("DMZServerinitializer.ini","mainDMZ");
        $addRequest = array();
        $addRequest['type'] = "addpoke";
        $addRequest['pokemonname'] = $_POST["pname"];
        $response = $addClient->send_request($addRequest);
    break;
}
echo json_encode($response);
exit(0);
?>
