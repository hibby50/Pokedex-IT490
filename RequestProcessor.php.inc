<?php
class loginDB
{
private $logindb;

public function __construct()
{
	$this->logindb = new mysqli("192.168.0.10","test","4321Password.","PokemonDatabase");

	if ($this->logindb->connect_errno != 0)
	{
		
		echo "using backup DB ".$this->logindb->connect_error.PHP_EOL;
		#exit(1);
		$this->logindb = new mysqli("192.168.0.20","test","4321Password.","PokemonDatabase");
	}
	echo "correctly connected to database".PHP_EOL;
}
public function SearchDatabase($PokemonName){
    $NametoSearch = $this->logindb->real_escape_string($PokemonName);
	$statement = "SELECT * FROM Pokemons WHERE name = '$NametoSearch'";
	$response = $this->logindb->query($statement);
    if($response->num_rows != 0){
        $PokemonResults = $response->fetch_assoc();
        echo "found it!";
        return $PokemonResults;
    }
    else{
	return false;
    }
    echo "No Results: Pokemon '$NametoSearch' not in database. Check NetworkLog.txt";
    file_put_contents("/var/www/html/Networklog.txt", "Pokemon '$NametoSearch' not found in databse. User instructed to add".date("Y/m/d")." ".date("h:i:sa")."\n", FILE_APPEND | LOCK_EX);
	return 0;

}
public function getteam(){
    $randomstatement = "SELECT * FROM Pokemons";
    $randomresponse = $this->logindb->query($randomstatement);
    $fullarray = array();
    while($row = $randomresponse->fetch_assoc()){
        array_push($fullarray,$row);
    }
    echo "done";
    return $fullarray;
}
public function addToDatabase($pokename){
    $apiurl = "https://pokeapi.co/api/v2/pokemon/".$pokename."/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
    $RawPokemonData = curl_exec($ch);
    curl_close($ch);
    $PokemonData = json_decode($RawPokemonData,true);
    $ArrayofStats[] = $PokemonData['id'];
    $ArrayofStats[] = $PokemonData['name'];
    if($PokemonData['id'] != ""){
        foreach($PokemonData['stats'] as $StatData){
            $ArrayofStats[] = $StatData['base_stat'];
        }
        $ArrayofStats[] = $PokemonData['sprites']['front_default'];
        $T0 = $this->logindb->real_escape_string($ArrayofStats[0]);
        $T1 = $this->logindb->real_escape_string($ArrayofStats[1]);
        $T2 = $this->logindb->real_escape_string($ArrayofStats[2]);
        $T3 = $this->logindb->real_escape_string($ArrayofStats[3]);
        $T4 = $this->logindb->real_escape_string($ArrayofStats[4]);
        $T5 = $this->logindb->real_escape_string($ArrayofStats[5]);
        $T6 = $this->logindb->real_escape_string($ArrayofStats[6]);
        $T7 = $this->logindb->real_escape_string($ArrayofStats[7]);
        $T8 = $this->logindb->real_escape_string($ArrayofStats[8]);
        $statement = "INSERT INTO Pokemons VALUES ('$T0','$T1','$T2','$T3','$T4','$T5','$T6','$T7','$T8')";
        $this->logindb->query($statement);
        echo "added";
    }
    else{
        echo "Failed to add Pokemon check NetworkLog.txt";
        file_put_contents("/var/www/html/Networklog.txt", "Failed to add Pokemon: Does not exist ".date("Y/m/d")." ".date("h:i:sa")."\n", FILE_APPEND | LOCK_EX);
        return 0;
    }
    return 1;
}
public function typecheck($pokename){
    $pokemon = $this->logindb->real_escape_string($pokename);
	$searchstatement = "SELECT type FROM RawPokemonData WHERE name = '$pokename'";
	$searchresponse = $this->logindb->query($searchstatement);
    if($searchresponse->num_rows != 0){
        $searchresults = $searchresponse->fetch_assoc();
        echo "found it!".PHP_EOL;
        return $searchresults;
    }
    return 0;
}
public function piccheck($thepokename){
    $thepokemon = $this->logindb->real_escape_string($thepokename);
	$picsearchstatement = "SELECT picture FROM RawPokemonData WHERE name = '$thepokename'";
	$picsearchresponse = $this->logindb->query($picsearchstatement);
    if($picsearchresponse->num_rows != 0){
        $picsearchresults = $picsearchresponse->fetch_assoc();
        echo "found it!".PHP_EOL;
        return $picsearchresults;
    }
    return 0;
}
public function requestlist(){
	$fulllist = "SELECT name,type FROM RawPokemonData";
	$listresponse = $this->logindb->query($fulllist);
    $fullarray = array();
    while($row = $listresponse->fetch_assoc()){
        array_push($fullarray,$row);
    }
    return $fullarray;
}
public function onetimeadd(){
    $apiurl = "https://pokeapi.co/api/v2/pokemon/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
    $RawPokemonData = curl_exec($ch);
    curl_close($ch);
    $PokemonData = json_decode($RawPokemonData,true);
    $d = 0;
   foreach($PokemonData['results'] as $pokename){
            echo $pokename['name']." Type(s): ";
            $thestring = $pokename['name'];
            $apiurl2 = "https://pokeapi.co/api/v2/pokemon/".$thestring."/";
            $ch2 = curl_init();
            curl_setopt($ch2, CURLOPT_URL, $apiurl2);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 4);
            $RawPokemonData2 = curl_exec($ch2);
            curl_close($ch2);
            $t = 0;
            $PokemonData2 = json_decode($RawPokemonData2,true);
            foreach($PokemonData2['types'] as $thetypes){
                $t = 0;
               foreach($thetypes['type'] as $finally){
                  echo $finally." ";
                  break;
               }
               echo $PokemonData2['sprites']['front_default'];
               $thepic = $PokemonData2['sprites']['front_default'];
               if(++$t > 0){
                    break;
                }
              
            }
            $one = $this->logindb->real_escape_string($thestring);
            $two = $this->logindb->real_escape_string($finally);
            $theactualpic = $this->logindb->real_escape_string($thepic);
            $addstatement = "INSERT INTO RawPokemonData VALUES ('$one','$two','$theactualpic')";
            $this->logindb->query($addstatement);
             echo "".PHP_EOL;

        if(++$d > 150){
                break;
        }
    }
    return $PokemonData;
}
public function validateLogin($username,$password)
{
	$un = $this->logindb->real_escape_string($username);
	$pw = $this->logindb->real_escape_string($password);
	$statement = "select * from RegisteredUsers where username = '$un'";
	$response = $this->logindb->query($statement);

	while ($row = $response->fetch_assoc())
	{
		echo "checking password for $username".PHP_EOL;
		if ($row["password"] == $pw)
		{
			echo "passwords match for $username".PHP_EOL;
            return 1;// password match
		}
		echo "passwords did not match for $username".PHP_EOL;
	}
	return 0;//no users matched username
}
public function addUser($email,$username,$password)
{
    $em = $this->logindb->real_escape_string($email);
    $un = $this->logindb->real_escape_string($username);
    $pw = $this->logindb->real_escape_string($password);
    echo $em;
    echo $un;
    echo $pw;
    $statement = "INSERT INTO RegisteredUsers VALUES ('$em', '$un','$pw')";
    $this->logindb->query($statement);
    echo "user added".PHP_EOL;
    return 1;

}
}
?>
