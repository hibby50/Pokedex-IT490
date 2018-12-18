<!doctype html>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
?>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="plusDatabaseStyles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<script>
function HandlePick5(Pick5){
    var Pick5Parsed = JSON.parse(Pick5);
    for(var i=0;i<5;i++){
        document.getElementById("Poke"+(i+1)+"pic").src = Pick5Parsed[i]['Picture'];
        document.getElementById("Pokemon"+(i+1)+"Name").innerHTML = Pick5Parsed[i]['Name'];
    }
    var teamname = document.getElementById("teamname").value;
    if(teamname == ""){
        document.getElementById("startinglineup").innerHTML = "Starting Lineup for Your Team";
    }else{
        document.getElementById("startinglineup").innerHTML = "Starting Lineup For " + teamname;
    }
    console.log(Pick5Parsed);
}
function pokelist(){
    var teamrequest = new XMLHttpRequest();
	teamrequest.open("POST","Login.php",true);
	teamrequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	teamrequest.onreadystatechange= function ()
	{
		
		if ((this.readyState == 4)&&(this.status == 200))
		{
           HandlePick5(this.responseText);
		}
	}
	teamrequest.send("type=getteam");
}
</script>
<body bgcolor='#f96e5b'>

<div id='cssmenu'>
<ul>
   <li><a href='Homepage.php'><span>Pokedex</span></a></li>
   <li><a href='Teams.php'><span>Create A Team</span></a></li>
   <li class='active'><a href='TeamBuilder.php'><span>Generate A Team</span></a></li>
   <li><a href='Forum/index.php'><span>Forum</span></a></li>
   <li class='last'><a href='Homepage.php?Loggedout=true'><span>Logout</span></a></li>
</ul>
</div>
    
    <h1 id="startinglineup" align="center"></h1>
    <table align="center">
        <tr>
            <td>
                <input type="text" placeholder="Enter Team Name" align="center" style="width:185px" id="teamname">
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" Onclick="pokelist()" style="height:100px;width:200px" align="center"><h1>Get A Team</h1></button>
            </td>
        </tr>
        <tr>
            <td>
                <img id="Poke1pic" src="" height="200" />
                <h3 id="Pokemon1Name" align="center"></h3>
            </td>
        </tr>
        <tr>
            <td>
                <img id="Poke2pic" src="" height="200" />
                <h3 id="Pokemon2Name" align="center"></h3>
            </td>
        </tr>
        <tr>
            <td>
                <img id="Poke3pic" src="" height="200" />
                <h3 id="Pokemon3Name" align="center"></h3>
            </td>
        </tr>
        <tr>
            <td>
                <img id="Poke4pic" src="" height="200" />
                <h3 id="Pokemon4Name" align="center"></h3>
            </td>
        </tr>
        <tr>
            <td>
                <img id="Poke5pic" src="" height="200" />
                <h3 id="Pokemon5Name" align="center"></h3>
            </td>
        </tr>
    </table>
    <div style="margin-left: 32%">
    <h1 id="confirmation"><strong><font size="25"></font></strong></h1>
    </div>
</body>
<html>

