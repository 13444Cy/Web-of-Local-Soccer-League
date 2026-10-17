<?php 
  $conn = new mysqli("localhost", "root", "", "legue");
  if($conn->connect_error){
    echo "Connection Failed ".$conn->connect_error;
  }
  else{
    $tomorrow_matches = [];
    $sql_stmt = $conn->prepare("SELECT home_team, away_team, match_date FROM tomorrow_matches");
    $sql_stmt->execute();
    $result = $sql_stmt->get_result();
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        $tomorrow_matches[] = $row;
      }
    }
    else{
      echo "No Matches Found";
    }
    $conn->close();
    // foreach($tomorrow_matches as $match){
    //   echo $match['home_team']." vs ".$match['away_team']." on ".$match['match_date']."<br>";
    // }
  }
?>