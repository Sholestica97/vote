<?php
// Include config file
require_once "linkdb.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Random Team Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=0.0">
	
  <!--
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.1/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.1/css/bootstrap.min.css">
-->
    <!-- Bootstrap CSS File -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<link rel="stylesheet" href="stylesheets/random-teams.css"/>
</head>
<body>
	<div class="container-fluid">
      <div class="row-fluid">
      <header>
			<h1 id="header">RANDOM TEAM GENERATOR</h1>

	  <script type="text/javascript">
	  function fn1()
	  {
		  var str = document.getElementById("text1").value;
		  alert("Value inside the text box is: "+str);
	  }
	  //buttonClick();
	 </script>
	

<form action="input_process.php" method="post" enctype="multipart/form-data" name="form1">

	<div class="form-group">
	<h5>INSERT</h5>
	<input type="text" class="form-control" id="sport_name" name="sport_name" placeholder="Sport Name">
	<button onclick="fn1()" id = "btn1">Click Me</button>
	</div>
	
		
    </div>
    	</header>
    	<div class="row-fluid">
    		<div class="players span4 col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
    		<div id="generate-teams" class="generate-teams span8 col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
    	</div>
  	</div>


  	<script type="text/template" id="player-list-template">
		<h4> INSERT: </h4>
  		<input id="add-player" type="text" placeholder="Add a Player...">
  		<ul id="player-list">
  		</ul>
  	</script>

  	<script type="text/template" id="team-list-template">
  		<ul id="team-list">
  		</ul>
  	</script>

  	<script type="text/template" id="generate-teams-template">
  		<span>Number of groups:</span>
  		<input name="num-teams" id="num-teams" type="number">
  		<button class="btn generate">Generate</button>
  		<div class="teams"></div>
  	</script>

	<script type="text/template" id="team-template">
  		<div class="team">
  			<h3 class="team-name"><%= model.get('name') %></h2>
  			<% _.each(model.get('players'), function(player) { %>
  				<div class="team-player"><%= player.get('name') %></div>
  			<% }); %>
  		</div>
  	</script>

  	<script type="text/template" id="player-template">
		<div class="player">
			<span><%= model.get('name') %></span>
			<a class="destroy"></a>
		</div>
  	</script>

  	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
  	<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.2/underscore-min.js" type="text/javascript"></script>
  	<script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js"></script>

  	<script type="text/javascript" src="javascripts/random-teams.js"></script>
	
</body>
</html>
