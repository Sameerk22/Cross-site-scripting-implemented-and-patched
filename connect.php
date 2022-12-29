<?php
  $comment = $_GET['comment'];
  $x = strpos($comment, "script");
if($x){
  echo "<div> You are not allowed to use script tag </div>";
}else{


  //Database connection
  $conn = new mysqli('localhost:8111','root','','test');
  if($conn->connect_error){
    die('Connection failed :'.$conn->connect_error);
  }

  $sql = "INSERT INTO comment (user_cmnt)
  VALUES ('$comment')";
  
  if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";
    header("Location: admin.html");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}
  

?>
