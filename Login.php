<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

ini_set("log_errors", 1);
ini_set("error_log", "/log/loginphp.log");
error_log("log init");

if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF";
//echo $request["type"];
switch ($request["type"])
{
	case "login":
        $client = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $request2 = array();
        $request2['type'] = "login";
        $request2['username'] = $_POST['uname']; //$argv[1];
        $request2['password'] = $_POST['pword'];//$argv[2];
        $request2['message'] = "HI";
        $response = $client->send_request($request2);
        if($response == 1){  
            session_start();
            $_SESSION = array();
            $_SESSION['username'] = $_POST['uname'];
            //header("location:Homepage.php?username=444");
        }
       
        //$response = $client->publish($request);

        //echo "client received response: ".PHP_EOL;
        //print_r($response);
        //echo "\n\n";*/
            //$response = "login, yeah we can do that";
	   break;
    case "register":
        $registerClient = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $registerRequest = array();
        $registerRequest['type'] = "register";
        $registerRequest['email'] = $_POST['email'];
        $registerRequest['username'] = $_POST['uname']; //$argv[1];
        $registerRequest['password'] = $_POST['pword'];//$argv[2];
        $registerRequest['message'] = "HIIIII";
        $response = $registerClient->send_request($registerRequest);
    break;
    case "onetime":
        $onetimeclient = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $onetime = array();
        $onetime['type'] = "onetime";
        $response = $onetimeclient->send_request($onetime);
    break;
    case "load":
        $loadclient = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $load = array();
        $load['type'] = "load";
        $load['poke1'] = $_POST['poke1'];
        $load['poke2'] = $_POST['poke2'];
        $load['poke3'] = $_POST['poke3'];
        $load['poke4'] = $_POST['poke4'];
        $load['poke5'] = $_POST['poke5'];
        $response = $loadclient->send_request($load);
    break;
    case "listrequest":
        $listclient = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $listrequest = array();
        $listrequest['type'] = "listrequest";
        $response = $listclient->send_request($listrequest);
    break;
    case "getteam":
        $teamclient = new rabbitMQClient("LOGINServerinitializer.ini","mainServer");
        $teamrequest = array();
        $teamrequest['type'] = "getteam";
        $response = $teamclient->send_request($teamrequest);
    break;
}
echo json_encode($response);
exit(0);
?>
