#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
require_once('RequestProcessor.php.inc');

function SearchDatabase($PokemonNamesearch)
{

    $SearchLogin = new loginDB();
    return $SearchLogin->SearchDatabase($PokemonNamesearch);
}

function doLogin($username,$password)
{
    // lookup username in databas
    // check password
    $login = new loginDB();
    return $login->validateLogin($username,$password);
    //return false if not valid
}
function doadd($email,$username,$password)
{
    $userCreation = new loginDB();
    return $userCreation->addUser($email,$username,$password);
}
function getteam()
{
    $teamholder = new loginDB();
    return $teamholder->getteam();
}
function onetimeadd(){
    $onetime = new loginDB();
    return $onetime->onetimeadd();
}
function getpoketype($pokename){
    $typefetch = new loginDB();
    return $typefetch->typecheck($pokename);
}
function getpokepic($thename){
    $picfetch = new loginDB();
    return $picfetch->piccheck($thename);
}
function listrequest(){
    $listrequest = new loginDB();
    return $listrequest->requestlist();
}
function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "searchpoke":
          $SearchResults = SearchDatabase($request['pokemonname']);
          //$thestuff2 = json_decode($temp,true);
	  if ($SearchResults == false){
		$addClient = new rabbitMQClient("DMZServerinitializer.ini","mainDMZ");
		$addRequest = array();
		$addRequest['type'] = "addpoke";
		$addRequest['pokemonname'] = $request['pokemonname'];
		$response = $addClient->send_request($addRequest);
        $SearchResults = SearchDatabase($request['pokemonname']);
        return $SearchResults;
	  }
	  else{
          	return $SearchResults;
	  }    
    case "login"://RETURNS 1 IF THE USERS MATCH
        $returnnumber=doLogin($request['username'],$request['password']);
        return $returnnumber;
    case "validate_session":
        return doValidate($request['sessionId']);
    case "register":
          return doadd($request['email'],$request['username'],$request['password']);
    case "onetime":
          return onetimeadd();
    case "listrequest":
          return listrequest();
    case "getteam":
          $PokemonList = getteam();
          $DatabaseCount = count($PokemonList);
          $Pick5Array = array();
          $RandomNums = array();
          while(count($RandomNums) < 5){
              $rand = rand(0,$DatabaseCount);
              if(!in_array($rand, $RandomNums)){
                  array_push($RandomNums, $rand);
              }
              
          }
          foreach($RandomNums as $Number){
              array_push($Pick5Array,$PokemonList[$Number]);
          }
          return $Pick5Array;
    case "load":
       $strongagainst = array("normal"=>0,"fighting"=>0,"flying"=>0,"poison"=>0,"ground"=>0,"rock"=>0,"bug"=>0,"ghost"=>0,"steel"=>0,"fire"=>0,"water"=>0,"grass"=>0,"electric"=>0,"psychic"=>0,"ice"=>0,"dragon"=>0,"fairy"=>0,"dark"=>0);
        $weakagainst = array("normal"=>0,"fighting"=>0,"flying"=>0,"poison"=>0,"ground"=>0,"rock"=>0,"bug"=>0,"ghost"=>0,"steel"=>0,"fire"=>0,"water"=>0,"grass"=>0,"electric"=>0,"psychic"=>0,"ice"=>0,"dragon"=>0,"fairy"=>0,"dark"=>0);
        $pokepictures = array();
        $pokelist = array($request['poke1'],$request['poke2'],$request['poke3'],$request['poke4'],$request['poke5']);
        foreach($pokelist as $pokename){
            $returnedtypearray = getpoketype($pokename);
            $returnedtype = $returnedtypearray['type'];
            $returnedpicarray = getpokepic($pokename);
            array_push($pokepictures,$returnedpicarray['picture']);
            switch($returnedtype){
                case "0":
                    break;
                case "normal":
                    $weakagainst['rock']++;
                    $weakagainst['ghost']++;
                    $weakagainst['steel']++;
                    break;
                case "fighting":
                    $weakagainst['flying']++;
                    $weakagainst['poison']++;
                    $weakagainst['psychic']++;
                    $weakagainst['bug']++;
                    $weakagainst['ghost']++;
                    $weakagainst['fairy']++;
                    $strongagainst['normal']++;
                    $strongagainst['rock']++;
                    $strongagainst['steel']++;
                    $strongagainst['ice']++;
                    $strongagainst['dark']++;
                    break;
                case "flying":
                    $weakagainst['rock']++;
                    $weakagainst['electric']++;
                    $weakagainst['steel']++;
                    $strongagainst['fighting']++;
                    $strongagainst['bug']++;
                    $strongagainst['grass']++;
                    break;
                case "poison":
                    $weakagainst['poison']++;
                    $weakagainst['ground']++;
                    $weakagainst['rock']++;
                    $weakagainst['ghost']++;
                    $weakagainst['steel']++;
                    $strongagainst['grass']++;
                    $strongagainst['fairy']++;
                    break;
                case "ground":
                    $weakagainst['flying']++;
                    $weakagainst['bug']++;
                    $weakagainst['grass']++;
                    $strongagainst['poison']++;
                    $strongagainst['rock']++;
                    $strongagainst['steel']++;
                    $strongagainst['fire']++;
                    $strongagainst['electric']++;
                    break;
                case "rock":
                    $weakagainst['fighting']++;
                    $weakagainst['ground']++;
                    $weakagainst['steel']++;
                    $strongagainst['flying']++;
                    $strongagainst['bug']++;
                    $strongagainst['fire']++;
                    $strongagainst['ice']++;
                    break;
                case "bug":
                    $weakagainst['fighting']++;
                    $weakagainst['flying']++;
                    $weakagainst['poison']++;
                    $weakagainst['ghost']++;
                    $weakagainst['steel']++;
                    $weakagainst['fire']++;
                    $weakagainst['fairy']++;
                    $strongagainst['grass']++;
                    $strongagainst['psychic']++;
                    $strongagainst['dark']++;
                    break;
                case "ghost":
                    $weakagainst['normal']++;
                    $weakagainst['dark']++;
                    $strongagainst['ghost']++;
                    $strongagainst['psychic']++;
                    break;
                 case "steel":
                    $weakagainst['steel']++;
                    $weakagainst['fire']++;
                    $weakagainst['water']++;
                    $weakagainst['dragon']++;
                    $strongagainst['rock']++;
                    $strongagainst['ice']++;
                    $strongagainst['fairy']++;
                    break;
                case "fire":
                    $weakagainst['rock']++;
                    $weakagainst['fire']++;
                    $weakagainst['water']++;
                    $weakagainst['dragon']++;
                    $strongagainst['grass']++;
                    $strongagainst['bug']++;
                    $strongagainst['steel']++;
                    $strongagainst['ice']++;
                    break;
                case "water":
                    $weakagainst['grass']++;
                    $weakagainst['dragon']++;
                    $weakagainst['water']++;
                    $strongagainst['ground']++;
                    $strongagainst['rock']++;
                    $strongagainst['fire']++;
                    break;
                case "grass":
                    $weakagainst['poison']++;
                    $weakagainst['flying']++;
                    $weakagainst['bug']++;
                    $weakagainst['grass']++;
                    $weakagainst['steel']++;
                    $weakagainst['fire']++;
                    $weakagainst['dragon']++;
                    $strongagainst['ground']++;
                    $strongagainst['rock']++;
                    $strongagainst['water']++;
                    break;
                case "electric":
                    $weakagainst['ground']++;
                    $weakagainst['grass']++;
                    $weakagainst['electric']++;
                    $weakagainst['dragon']++;
                    $strongagainst['flying']++;
                    $strongagainst['water']++;
                    break;
                 case "psychic":
                    $weakagainst['steel']++;
                    $weakagainst['psychic']++;
                    $weakagainst['dark']++;
                    $strongagainst['fighting']++;
                    $strongagainst['poison']++;
                    break;
                case "ice":
                    $weakagainst['steel']++;
                    $weakagainst['fire']++;
                    $weakagainst['water']++;
                    $weakagainst['ice']++;
                    $strongagainst['grass']++;
                    $strongagainst['flying']++;
                    $strongagainst['ground']++;
                    $strongagainst['dragon']++;
                    break;
                case "dragon":
                    $weakagainst['steel']++;
                    $weakagainst['fairy']++;
                    $strongagainst['dragon']++;
                    break;
                case "fairy":
                    $weakagainst['steel']++;
                    $weakagainst['poison']++;
                    $weakagainst['fire']++;
                    $strongagainst['flying']++;
                    $strongagainst['dragon']++;
                    $strongagainst['dark']++;
                    break;
                case "dark":
                    $weakagainst['fighting']++;
                    $weakagainst['dark']++;
                    $weakagainst['fairy']++;
                    $strongagainst['ghost']++;
                    $strongagainst['psychic']++;
                    break;
            }
        }
        print_r($weakagainst);
        print_r($strongagainst);
        return array($weakagainst,$strongagainst,$pokepictures);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$server = new rabbitMQServer("LOGINServerinitializer.ini","mainServer");

$server->process_requests('requestProcessor');
exit();
?>

