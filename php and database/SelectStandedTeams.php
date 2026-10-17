<?php 
  $conn = new mysqli("localhost", "root", "", "legue");
  if($conn->connect_error){
    echo "Connection Failed ".$conn->connect_error;
  }
  else{
    $teams = [];
    $sql_stmt = $conn->prepare("SELECT * FROM team_standings");
    $sql_stmt->execute();
    $result = $sql_stmt->get_result();
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        $teams[] = $row;
      }
    }
    else{
      echo "No team Found";
    }
    $conn->close();
   
  }
?>