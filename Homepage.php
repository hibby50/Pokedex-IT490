<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
function logout(){
    if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}
if(isset($_GET['Loggedout'])){
    logout();
    header("location:index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body bgcolor='#f96e5b'>
    <script>
function HandleSearchRequest(response){
   var SearchResults = JSON.parse(response);
    if(response != 0){
        console.log(SearchResults);
        document.getElementById("statos").innerHTML = "<strong>Stats:</strong><br /> ";
        document.getElementById("pokepicture").src = SearchResults['Picture'];
        document.getElementById('name').innerHTML = "<strong>Name:</strong> " + SearchResults['Name'];
        var Stats = "Speed: " + SearchResults['Speed'] + "<br />" + "Special Defense: " + SearchResults['SpecialDefense'] + "<br />" + "Special Attack: " + SearchResults['SpecialAttack'] + "<br />" + "Defense: " + SearchResults['Defense'] + "<br />" + "Attack: " + SearchResults['Attack'] + "<br />" + "HP: " + SearchResults['HP'];
        document.getElementById("statos").innerHTML += Stats;
    }
    else{
        alert("No results found, Check your spelling or Add pokemons to database int the +Database tab");
    }

}
function SendSearchRequest()
{
   
    var pokemonname = document.getElementById('searchpokemonname').value;
    var request = new XMLHttpRequest();
    request.open("POST","Search.php",true);
    request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    request.onreadystatechange= function ()
    {
       
        if ((this.readyState == 4)&&(this.status == 200))
        {
            HandleSearchRequest(this.responseText);
        }       
    }
    request.send("type=searchpoke&pname="+pokemonname);
}
</script>
    <div style="margin-left: 41%">
	<h1>POOR MAN'S POKEDEX</h1>
    </div>
    <div id='cssmenu'>
    <ul>
       <li class='active'><a href='Homepage.php'><span>Pokedex</span></a></li>
       <li><a href='Teams.php'><span>Create A Team</span></a></li>
        <li><a href='TeamBuilder.php'><span>Generate A Team</span></a></li>
        <li><a href='Forum/index.php'><span>Forum</span></a></li>
       <li class='last'><a href='Homepage.php?Loggedout=true'><span>Logout</span></a></li>
    </ul>
    </div>
    <div  style="margin-left: 41%">
        <input type="text" id="searchpokemonname" placeholder="Input Pokemon Name">
        <button type="button" id="searchbutton" onclick="SendSearchRequest()">Search</button>
    </div>
	<div id="pokedex">
  <div id="left">
    <div id="logo"></div>
    <div id="bg_curve1_left"></div>
    <div id="bg_curve2_left"></div>
    <div id="curve1_left">
      <div id="buttonGlass">
        <div id="reflect"> </div>
      </div>
      <div id="miniButtonGlass1"></div>
      <div id="miniButtonGlass2"></div>
      <div id="miniButtonGlass3"></div>
    </div>
    <div id="curve2_left">
      <div id="junction">
        <div id="junction1"></div>
        <div id="junction2"></div>
      </div>
    </div>
    <div id="screen">
      <div id="topPicture">
        <div id="buttontopPicture1"></div>
        <div id="buttontopPicture2"></div>
      </div>
      <div id="picture">
        <img id="pokepicture" src="" height="170" />
      </div>
      <div id="buttonbottomPicture"></div>
      <div id="speakers">
        <div class="sp"></div>
        <div class="sp"></div>
        <div class="sp"></div>
        <div class="sp"></div>
      </div>
    </div>
    <div id="bigbluebutton"></div>
    <div id="barbutton1"></div>
    <div id="barbutton2"></div>
    <div id="cross">
      <div id="leftcross">
        <div id="leftT"></div>
      </div>
      <div id="topcross">
        <div id="upT"></div>
      </div>
      <div id="rightcross">
        <div id="rightT"></div>
      </div>
      <div id="midcross">
        <div id="midCircle"></div>
      </div>
      <div id="botcross">
        <div id="downT"></div>
      </div>
    </div>
  </div>
  <div id="right">
    <div id="stats">
      <p id="name"></p>
      <p id="statos"></p>
    </div>
    <div id="blueButtons1">
      <div class="blueButton"></div>
      <div class="blueButton"></div>
      <div class="blueButton"></div>
      <div class="blueButton"></div>
      <div class="blueButton"></div>
    </div>
    <div id="blueButtons2">
      <div class="blueButton"></div>
      <div class="blueButton"></div>
      <div class="blueButton"></div>
      <div class="blueButton"></div>
      <div class="blueButton"></div>
    </div>
    <div id="miniButtonGlass4"></div>
    <div id="miniButtonGlass5"></div>
    <div id="barbutton3"></div>
    <div id="barbutton4"></div>
    <div id="yellowBox1"></div>
    <div id="yellowBox2">
    </div>
    <div id="bg_curve1_right"></div>
    <div id="bg_curve2_right"></div>
    <div id="curve1_right"></div>
    <div id="curve2_right"></div>
  </div>
</div>  
</body>
</html>

<!--<p id="check">WELCOME</p>

<input type="text" id="pokemonname" placeholder="Input Pokemon Name">
<button type="button" id="jstrigger" onclick="SendPokemonRequest()">Search</button>
<div class="pokemon-container">
    <p id=name></p>
    <td><img id="pokepicture" src="blank"></td>
    <p class=ability></p>
    <p class=movees></p>
    <p id="stats"></p>
<a href="Homepage.php?hello=true">
    Logout
</a>
<a href="AboutUs.php">
    About Us
</a>-->
