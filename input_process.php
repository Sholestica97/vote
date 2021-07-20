<!DOCTYPE html>
<html>
<head>
<title>Team Category</title>
</head>
<body>
<?php 
include ('linkdb.php'); 
$sport_name = $_POST['sport_name'];
$team_name = $_POST['team_name'];
$no_groups = $_POST['no_groups'];
for($i=1;$i<32;$i++){
  echo $team_name[]="team_name".$i."<br>";
}
for($i=1;$i<20;$i++){
  echo $no_groups[]="no_groups".$i."<br>";
}
$query ="insert into team_list  values (DEFAULT,'$sport_name','$team_name', '$no_groups')";
if (mysqli_query($conn, $query)) {
	
  echo "sport_name :".$sport_name."<br>";
  echo "team_name :".$team_name."<br>";
  echo "no_groups :".$no_groups."<br>";
  
    echo "New record created successfully";
	//echo "<a href=\"003data_tbl.php\">  list</a>"; 
	header("location: 003data_tbl.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>
