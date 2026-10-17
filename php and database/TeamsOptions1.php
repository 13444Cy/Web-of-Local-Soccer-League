<?php
    $conn = new mysqli('localhost', 'root', '', 'legue');
            
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              
              $sql = "SELECT name FROM teams";
              $result = $conn->query($sql);
              
              if ($result && $result->num_rows > 0) {
                  echo '<select name="home_team" id="home_team">';
                  while ($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                  }
                  echo '</select>';
              }
              else {
                  echo 'No teams found';
              } 
              
              $conn->close();
?>