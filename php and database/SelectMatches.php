<?php 
  $matches = [];
  $conn = new mysqli("localhost", "root", "", "legue");
  if($conn->connect_error){
    die("We can't connect to the database!!");
  }
  $stmt = $conn->prepare("SELECT home_team, away_team , match_date , id, home_team_score, away_team_score  FROM matches_view");
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $matches[] = $row;
    }
  }
  $conn->close();

?>