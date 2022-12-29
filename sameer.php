<html>

<head>

<style>

table

{

border-style:solid;

border-width:10px;

border-color:pink;

}
body{
background-color: black;
      background: url("5.png");
      background-repeat: no-repeat;
      background-size: width=1080px720p;
animation: myAnim 5s ease-out 0s infinite alternate-reverse backwards;
    
}
</style>

</head>

<body bgcolor="#EEFDEF">
<?php

$name=$_GET["name"];
$mysqli = new mysqli("localhost:8111","root",null,"test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql = " SELECT * FROM comment ";
echo "<table border='1'>

<tr>

<th>Commentss</th>


</tr>";

 
$result = $mysqli -> query($sql);
$name = "";
while($row = $result -> fetch_row()){
  if($row[0]!=$name){
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row[0]) . "</td>";
    echo "</tr>";
  }  
  $name=$row[0];

}

echo "</table>";

$mysqli -> close();
?>
</body>
</html>
