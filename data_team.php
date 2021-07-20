<html>
<head>
<title>Buku Javascript dan PHP </title>
<link rel="stylesheet" type="text/css" href="../menu/pro_dropdown_3/pro_dropdown_3.css" />
<script src="../menu/pro_dropdown_3/stuHover.js" type="text/javascript"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
</head>
<body>
<?PHP
//include ('../menu/main_menu.php'); 
include ('001link_db2.php'); 
$sql="SELECT * from pelajar ORDER BY Nama ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());

?>
<div class="container">
<P><strong><center> Student List</strong></center>  
<table class="table table-hover" border="0" width="849" align="center" cellspacing="2" cellpadding="2">
  <thead>
<tr>
<td align="center" bgcolor="#FFCC00"><strong>No Matrik</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Nama</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Umur</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jantina</strong></td> 
<td align="center" bgcolor="#FFCC00"><strong>Email</strong></td> 
</tr>
 </thead>
<?PHP
while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>" .$row["No_matrik"]. "</td>";
 echo "<td>" .$row["Nama"].  "</td>";
 echo "<td>" .$row["Umur"]."</td>";
 //echo "<td>" .$row["dob"]."</td>";
 echo "<td>" .$row["Jantina"]."</td>";
echo "<td>" .$row["Email"]."</td>";
}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>
