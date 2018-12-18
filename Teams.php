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
</head>
<script>
function onetimeadd()
{
    var tmps = new XMLHttpRequest();
	tmps.open("POST","Login.php",true);
	tmps.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	tmps.onreadystatechange= function ()
	{
		
		if ((this.readyState == 4)&&(this.status == 200))
		{
           // Handleaddresponse(this.responseText);
		}
        //document.write(newPassword);
	}
	tmps.send("type=onetime");
}
function HandleReturnedArray(response, type){
    //alert("Worked");
    var returnedarrays = JSON.parse(response);
    if(type == "botharrays"){
        console.log(returnedarrays);
        document.getElementById("Poke1pic").src = returnedarrays[2][0];
        document.getElementById("Poke2pic").src = returnedarrays[2][1];
        document.getElementById("Poke3pic").src = returnedarrays[2][2];
        document.getElementById("Poke4pic").src = returnedarrays[2][3];
        document.getElementById("Poke5pic").src = returnedarrays[2][4];
        document.getElementById("normalstrong").innerHTML = "Normal";
        document.getElementById("normalval").innerHTML = returnedarrays[1]['normal'];
        document.getElementById("fightingstrong").innerHTML = "Fighting";
        document.getElementById("fightingval").innerHTML = returnedarrays[1]['fighting'];
        document.getElementById("flyingstrong").innerHTML = "Flying";
        document.getElementById("flyingval").innerHTML = returnedarrays[1]['flying'];
        document.getElementById("poisonstrong").innerHTML = "Poison";
        document.getElementById("poisonval").innerHTML = returnedarrays[1]['poison'];
        document.getElementById("groundstrong").innerHTML = "Ground";
        document.getElementById("groundval").innerHTML = returnedarrays[1]['ground'];
        document.getElementById("rockstrong").innerHTML = "Rock";
        document.getElementById("rockval").innerHTML = returnedarrays[1]['rock'];
        document.getElementById("bugstrong").innerHTML = "Bug";
        document.getElementById("bugval").innerHTML = returnedarrays[1]['bug'];
        document.getElementById("ghoststrong").innerHTML = "Ghost";
        document.getElementById("ghostval").innerHTML = returnedarrays[1]['ghost'];
        document.getElementById("steelstrong").innerHTML = "Steel";
        document.getElementById("steelval").innerHTML = returnedarrays[1]['steel'];
        document.getElementById("firestrong").innerHTML = "Fire";
        document.getElementById("fireval").innerHTML = returnedarrays[1]['fire'];
        document.getElementById("waterstrong").innerHTML = "Water";
        document.getElementById("waterval").innerHTML = returnedarrays[1]['water'];
        document.getElementById("grassstrong").innerHTML = "Grass";
        document.getElementById("grassval").innerHTML = returnedarrays[1]['grass'];
        document.getElementById("electricstrong").innerHTML = "Electric";
        document.getElementById("electricval").innerHTML = returnedarrays[1]['electric'];
        document.getElementById("psychicstrong").innerHTML = "Psychic";
        document.getElementById("psychicval").innerHTML = returnedarrays[1]['psychic'];
        document.getElementById("icestrong").innerHTML = "Ice";
        document.getElementById("iceval").innerHTML = returnedarrays[1]['ice'];
        document.getElementById("dragonstrong").innerHTML = "Dragon";
        document.getElementById("dragonval").innerHTML = returnedarrays[1]['dragon'];
        document.getElementById("fairystrong").innerHTML = "Fairy";
        document.getElementById("fairyval").innerHTML = returnedarrays[1]['fairy'];
        document.getElementById("darkstrong").innerHTML = "Dark";
        document.getElementById("darkval").innerHTML = returnedarrays[1]['dark'];
        document.getElementById("yourteam").innerHTML = "YOUR TEAM";
        document.getElementById("StrongAgainst").innerHTML = "Strong Against";
        document.getElementById("WeakAgainst").innerHTML = "Weak Against";
        
        document.getElementById("normalweak").innerHTML = "Normal";
        document.getElementById("normalval1").innerHTML = returnedarrays[0]['normal'];
        document.getElementById("fightingweak").innerHTML = "Fighting";
        document.getElementById("fightingval1").innerHTML = returnedarrays[0]['fighting'];
        document.getElementById("flyingweak").innerHTML = "Flying";
        document.getElementById("flyingval1").innerHTML = returnedarrays[0]['flying'];
        document.getElementById("poisonweak").innerHTML = "Poison";
        document.getElementById("poisonval1").innerHTML = returnedarrays[0]['poison'];
        document.getElementById("groundweak").innerHTML = "Ground";
        document.getElementById("groundval1").innerHTML = returnedarrays[0]['ground'];
        document.getElementById("rockweak").innerHTML = "Rock";
        document.getElementById("rockval1").innerHTML = returnedarrays[0]['rock'];
        document.getElementById("bugweak").innerHTML = "Bug";
        document.getElementById("bugval1").innerHTML = returnedarrays[0]['bug'];
        document.getElementById("ghostweak").innerHTML = "Ghost";
        document.getElementById("ghostval1").innerHTML = returnedarrays[0]['ghost'];
        document.getElementById("steelweak").innerHTML = "Steel";
        document.getElementById("steelval1").innerHTML = returnedarrays[0]['steel'];
        document.getElementById("fireweak").innerHTML = "Fire";
        document.getElementById("fireval1").innerHTML = returnedarrays[0]['fire'];
        document.getElementById("waterweak").innerHTML = "Water";
        document.getElementById("waterval1").innerHTML = returnedarrays[0]['water'];
        document.getElementById("grassweak").innerHTML = "Grass";
        document.getElementById("grassval1").innerHTML = returnedarrays[0]['grass'];
        document.getElementById("electricweak").innerHTML = "Electric";
        document.getElementById("electricval1").innerHTML = returnedarrays[0]['electric'];
        document.getElementById("psychicweak").innerHTML = "Psychic";
        document.getElementById("psychicval1").innerHTML = returnedarrays[0]['psychic'];
        document.getElementById("iceweak").innerHTML = "Ice";
        document.getElementById("iceval1").innerHTML = returnedarrays[0]['ice'];
        document.getElementById("dragonweak").innerHTML = "Dragon";
        document.getElementById("dragonval1").innerHTML = returnedarrays[0]['dragon'];
        document.getElementById("fairyweak").innerHTML = "Fairy";
        document.getElementById("fairyval1").innerHTML = returnedarrays[0]['fairy'];
        document.getElementById("darkweak").innerHTML = "Dark";
        document.getElementById("darkval1").innerHTML = returnedarrays[0]['dark'];
        document.getElementById("yourteam").innerHTML = "YOUR TEAM";
        document.getElementById("StrongAgainst").innerHTML = "Strong Against";
        document.getElementById("WeakAgainst").innerHTML = "Weak Against";
        
        

    }
    else if(type=="loadlist"){
       console.log(returnedarrays);    
        var LeftColumn = "";
        var RightColumn = "";
        //console.log(returnedarrays[0]['name']);
        var i = 0;
        while(i<151){ 
            while(i<18){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group1name").innerHTML = LeftColumn;
            document.getElementById("group1type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<36){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group2name").innerHTML = LeftColumn;
            document.getElementById("group2type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<54){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group3name").innerHTML = LeftColumn;
            document.getElementById("group3type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<72){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group4name").innerHTML = LeftColumn;
            document.getElementById("group4type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<90){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group5name").innerHTML = LeftColumn;
            document.getElementById("group5type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<108){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group6name").innerHTML = LeftColumn;
            document.getElementById("group6type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<126){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group7name").innerHTML = LeftColumn;
            document.getElementById("group7type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<144){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group8name").innerHTML = LeftColumn;
            document.getElementById("group8type").innerHTML = RightColumn;
            LeftColumn = "";
            RightColumn = "";
            while(i<151){
                LeftColumn += (i+1)+"."+returnedarrays[i]['name']+"<br />";
                RightColumn += returnedarrays[i]['type']+"<br />";
                i++;
            }
            document.getElementById("group9name").innerHTML = LeftColumn;
            document.getElementById("group9type").innerHTML = RightColumn;
        }
    }
}
function teamcheck()
{
    var tmps = new XMLHttpRequest();
    var typebotharrays = "botharrays";
    var Pokemon1 = document.getElementById('Pokemon1Name').value;
    var Pokemon2 = document.getElementById('Pokemon2Name').value;
    var Pokemon3 = document.getElementById('Pokemon3Name').value;
    var Pokemon4 = document.getElementById('Pokemon4Name').value;
    var Pokemon5 = document.getElementById('Pokemon5Name').value;
	tmps.open("POST","Login.php",true);
	tmps.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	tmps.onreadystatechange= function ()
	{
		
		if ((this.readyState == 4)&&(this.status == 200))
		{
            HandleReturnedArray(this.responseText,typebotharrays);
		}
        //document.write(newPassword);
	}
	tmps.send("type=load&poke1="+Pokemon1+"&poke2="+Pokemon2+"&poke3="+Pokemon3+"&poke4="+Pokemon4+"&poke5="+Pokemon5);
}
function pokelist(){
    var listrequest = new XMLHttpRequest();
    var typeloadlist = "loadlist";
	listrequest.open("POST","Login.php",true);
	listrequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	listrequest.onreadystatechange= function ()
	{
		
		if ((this.readyState == 4)&&(this.status == 200))
		{
           HandleReturnedArray(this.responseText,typeloadlist);
		}
        //document.write(newPassword);
	}
	listrequest.send("type=listrequest");
}
window.onload = pokelist;
</script>
<body bgcolor='#f96e5b'>

<div id='cssmenu'>
<ul>
   <li><a href='Homepage.php'><span>Pokedex</span></a></li>
   <li class='active'><a href='Teams.php'><span>Create A Team</span></a></li>
   <li><a href='TeamBuilder.php'><span>Generate A Team</span></a></li>
   <li><a href='Forum/index.php'><span>Forum</span></a></li>
   <li class='last'><a href='Homepage.php?Loggedout=true'><span>Logout</span></a></li>
</ul>
</div>
    <div  style="margin-left: 10% margin-top: 20%">
        <input type="text" id="Pokemon1Name" placeholder="Pokemon1">
        <input type="text" id="Pokemon2Name" placeholder="Pokemon2">
        <input type="text" id="Pokemon3Name" placeholder="Pokemon3">
        <input type="text" id="Pokemon4Name" placeholder="Pokemon4">
        <input type="text" id="Pokemon5Name" placeholder="Pokemon5">
        <button type="button" id="addbutton" Onclick="onetimeadd()">Search</button>
        <button type="button" id="Loadbutton" Onclick="teamcheck()">Check Teams</button>
    </div>
    <h1 align="center" id="yourteam"></h1>
    <div align="center">
        <img id="Poke1pic" src="" height="200" />
        <img id="Poke2pic" src="" height="200" />
        <img id="Poke3pic" src="" height="200" />
        <img id="Poke4pic" src="" height="200" />
        <img id="Poke5pic" src="" height="200" />
    </div>
    <h2 align="center" id="StrongAgainst"></h2>
    <table align="center">
        <tr>
            <th width="100px" id="normalstrong">
                
            </th>
            <th width="100px" id="fightingstrong">
                
            </th>
            <th width="100px" id="flyingstrong">
                
            </th>
            <th width="100px" id="poisonstrong">
                
            </th>
            <th width="100px" id="groundstrong">
                
            </th>
            <th width="100px" id="rockstrong">
                
            </th>
            <th width="100px" id="bugstrong">
                
            </th>
            <th width="100px" id="ghoststrong">
                
            </th>
            <th width="100px" id="steelstrong">
                
            </th>
        </tr>
        <tr>
            <td id="normalval" align="center">
                
            </td>
            <td id="fightingval" align="center">
                
            </td>
            <td id="flyingval" align="center">
                
            </td>
            <td id="poisonval" align="center">
                
            </td>
            <td id="groundval" align="center">
                
            </td>
            <td id="rockval" align="center">
                
            </td>
            <td id="bugval" align="center">
                
            </td>
            <td id="ghostval" align="center">
                
            </td>
            <td id="steelval" align="center">
                
            </td>
        </tr>
        <tr>
            <th width="100px" id="firestrong">
                
            </th>
            <th width="100px" id="waterstrong">
                
            </th>
            <th width="100px" id="grassstrong">
                
            </th>
            <th width="100px" id="electricstrong">
                
            </th>
            <th width="100px" id="psychicstrong">
                
            </th>
            <th width="100px" id="icestrong">
                
            </th>
            <th width="100px" id="dragonstrong">
                
            </th>
            <th width="100px" id="fairystrong">
                
            </th>
            <th width="100px" id="darkstrong">
                
            </th>
        </tr>
        <tr>
            <td id="fireval" align="center">
                
            </td>
            <td id="waterval" align="center">
                
            </td>
                <td id="grassval" align="center">
                
            </td>
            <td id="electricval" align="center">
                
            </td>
            <td id="psychicval" align="center">
                
            </td>
            <td id="iceval" align="center">
                
            </td>
            <td id="dragonval" align="center">
                
            </td>
            <td id="fairyval" align="center">
                
            </td>
            <td id="darkval" align="center">
                
            </td>
        </tr>
    </table>
 <h2 align="center" id="WeakAgainst"></h2>
     <table align="center">
        <tr>
            <th width="100px" id="normalweak">
                
            </th>
            <th width="100px" id="fightingweak">
                
            </th>
            <th width="100px" id="flyingweak">
                
            </th>
            <th width="100px" id="poisonweak">
                
            </th>
            <th width="100px" id="groundweak">
                
            </th>
            <th width="100px" id="rockweak">
                
            </th>
            <th width="100px" id="bugweak">
                
            </th>
            <th width="100px" id="ghostweak">
                
            </th>
            <th width="100px" id="steelweak">
                
            </th>
        </tr>
        <tr>
            <td id="normalval1" align="center">
                
            </td>
            <td id="fightingval1" align="center">
                
            </td>
            <td id="flyingval1" align="center">
                
            </td>
            <td id="poisonval1" align="center">
                
            </td>
            <td id="groundval1" align="center">
                
            </td>
            <td id="rockval1" align="center">
                
            </td>
            <td id="bugval1" align="center">
                
            </td>
            <td id="ghostval1" align="center">
                
            </td>
            <td id="steelval1" align="center">
                
            </td>
        </tr>
        <tr>
            <th width="100px" id="fireweak">
                
            </th>
            <th width="100px" id="waterweak">
                
            </th>
            <th width="100px" id="grassweak">
                
            </th>
            <th width="100px" id="electricweak">
                
            </th>
            <th width="100px" id="psychicweak">
                
            </th>
            <th width="100px" id="iceweak">
                
            </th>
            <th width="100px" id="dragonweak">
                
            </th>
            <th width="100px" id="fairyweak">
                
            </th>
            <th width="100px" id="darkweak">
                
            </th>
        </tr>
        <tr>
            <td id="fireval1" align="center">
                
            </td>
            <td id="waterval1" align="center">
                
            </td>
                <td id="grassval1" align="center">
                
            </td>
            <td id="electricval1" align="center">
                
            </td>
            <td id="psychicval1" align="center">
                
            </td>
            <td id="iceval1" align="center">
                
            </td>
            <td id="dragonval1" align="center">
                
            </td>
            <td id="fairyval1" align="center">
                
            </td>
            <td id="darkval1" align="center">
                
            </td>
        </tr>
    </table>
    <table align="center" border="1" bgcolor="#FFA07A">
        <tr>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
            <th>
                Pokemon
            </th>
            <th>
                Type
            </th>
        </tr>
        <tr>
            <td id="group1name">
            </td>
            <td id="group1type">
            </td>  
            <td id="group2name">
            </td>
            <td id="group2type">
            </td> 
            <td id="group3name">
            </td>
            <td id="group3type">
            </td> 
            <td id="group4name">
            </td>
            <td id="group4type">
            </td> 
            <td id="group5name">
            </td>
            <td id="group5type">
            </td> 
            <td id="group6name">
            </td>
            <td id="group6type">
            </td> 
            <td id="group7name">
            </td>
            <td id="group7type">
            </td> 
            <td id="group8name">
            </td>
            <td id="group8type">
            </td> 
            <td id="group9name" align="top">
            </td>
            <td id="group9type" align="top">
            </td> 
        </tr>
    </table>
    <div style="margin-left: 32%">
    <h1 id="confirmation"><strong><font size="25"></font></strong></h1>
    </div>
</body>
<html>