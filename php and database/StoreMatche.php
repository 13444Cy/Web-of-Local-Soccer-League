<?php
  //date_default_timezone_set('Africa/Casablanca');
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $home_team = $_POST['home_team'];
    $away_team = $_POST['away_team'];
    $date = $_POST['match_date'];
    $time = $_POST['match_time'];
    $home_team_goals = (int)$_POST['home_team_goals'];
    $away_team_goals = (int)$_POST['away_team_goals'];
    
    // $end_time = $_POST['match_end_time'];
   
    $home_team_err = $away_team_err = $date_err = $time_err = $home_team_goals_err = $away_team_goals_err = /*$end_time_err = */"";
    $required_fields = array('home_team', 'away_team', 'match_date', 'match_time', 'home_team_goals', 'away_team_goals', /*'match_end_time'*/);
    
  }
  else{
    die ("No data received");
    
  }
  $has_errors = false;
  if (empty($home_team)) {
      $home_team_err = "Please select the home team";
      $has_errors = true;
  }
  if (empty($away_team)) {
      $away_team_err = "Please select the away team";
      $has_errors = true;
  }
  if ($home_team === $away_team) {
      $home_team_err = $away_team_err = "Teams cannot be the same";
      $has_errors = true;
  }
  if (empty($date)) {
      $date_err = "Please enter the date";
      $has_errors = true;
  }
  if (empty($time)) {
      $time_err = "Please enter the time";
      $has_errors = true;
  }

  if (!$has_errors) {

    echo "The home team is: " . $home_team . "<br>";
    echo "The away team is: " . $away_team . "<br>";
    echo "The date is: " . $date . "<br>";
    echo "The time is: " . $time . "<br>";
    echo "The home team goals are: " . $home_team_goals . "<br>";
    echo "The away team goals are: " . $away_team_goals . "<br>";
    // echo "The end time is: " . $end_time . "<br>";
    $start_time = $date . " " . $time;
    $date = $date.' '.$time.':00';
    // Connect to the database
    //-----------------------------------------------------------
    $conn = new mysqli("localhost", "root", "", "legue");
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlstmt = $conn->prepare("SELECT id FROM teams WHERE name = ?");
    $sqlstmt->bind_param("s", $home_team );
    $sqlstmt->execute();
    $home_team_id = $sqlstmt->get_result()->fetch_assoc()['id'];
    $sqlstmt = $conn->prepare("SELECT id FROM teams WHERE name = ?");
    $sqlstmt->bind_param("s", $away_team );
    $sqlstmt->execute();
    $away_team_id = $sqlstmt->get_result()->fetch_assoc()['id'];

    if(isset($_POST['id'])){
      $id = $_POST['id'];
      $sql = "DELETE FROM matches WHERE id = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $id);
      if(!($stmt->execute())){
        
      
        echo "Error deleting match: " . $conn->error;
      }
      $stmt->close();
      
      
    }
    else
    {
      $id = 1;
      $sqlstmt = $conn->prepare("SELECT MAX(id) AS match_id FROM matches");
      if($sqlstmt->execute()){
      $id = $sqlstmt->get_result()->fetch_assoc()['match_id']+1;
     }
    }
    

    // $sqlstmt = $conn->prepare("SELECT * FROM matches_view WHERE home_team = ? OR away_team = ?");
    // $sqlstmt->bind_param("ss", $home_team, $away_team);
    // $result = $sqlstmt->get_result();
    // if($result->rows() > 0){
    //   while($row = $result->fetch_assoc()){
    //     if($date >= $row['match_date']){
    //       $match_date = new DateTime($row['match_date']);
    //       $match_date->modify('+ 2 days');
    //       if($date < $match_date->format('Y-m-d H:i:s')){
    //         $ID = $row['id'];
    //         $sqlstmt = $conn->prepare("DELETE FROM matches WHERE id = ?");
    //         $sqlstmt->bind_param("i", $ID);
    //         $sqlstmt->execute();

    //         $sqlstmt = $conn->prepare("INSERT INTO matches (id ,home_team_id, away_team_id, match_date, home_team_score, away_team_score) VALUES (?, ?, ?, ?, ?, ?)");
    //         $sqlstmt->bind_param("iiisii", $ID, $home_team_id, $away_team_id, $date, $home_team_goals, $away_team_goals);
    //         $sqlstmt->execute();
    //         echo "Match added successfully";
    //         $sqlstmt->close();
    //         $conn->close();
    //         exit();
    //       }
          
    //     }
    //   }
    // }

    // echo "The home team id is: " . $home_team_id . "<br>";
    // echo "The away team id is: " . $away_team_id . "<br>";
    // echo "The type of team id is: ". gettype($home_team_id)."<br>";
    // // if match is played before
    // if($date < date('Y-m-d H:i:s')){
    //   $statu = 'played';
    //   $sqlstmt = $conn->prepare("INSERT INTO matches (id ,home_team_id, away_team_id, match_date, home_team_score, away_team_score, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
    //   $sqlstmt->bind_param("iiisii", $id, $home_team_id, $away_team_id, $date, $home_team_goals, $away_team_goals, $statu);
    //   $sqlstmt->execute();
    //   echo "Match added successfully";
    //   $sqlstmt->close();
    //   $conn->close();
    //   exit();
    // }

    $sqlstmt = $conn->prepare("INSERT INTO matches (id ,home_team_id, away_team_id, match_date, home_team_score, away_team_score) VALUES (?, ?, ?, ?, ?, ?)");
    $sqlstmt->bind_param("iiisii", $id, $home_team_id, $away_team_id, $date, $home_team_goals, $away_team_goals);
    $sqlstmt->execute();
    echo "Match added successfully";
    $sqlstmt->close();
    $conn->close();
    
  }
  else{
    echo htmlspecialchars($home_team_err) . "<br>";
    echo htmlspecialchars($away_team_err) . "<br>";
    echo htmlspecialchars($date_err) . "<br>";
    echo htmlspecialchars($time_err) . "<br>";
  }

?>