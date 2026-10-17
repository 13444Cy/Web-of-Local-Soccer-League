<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Match</title>
  <link rel="stylesheet" href="http://localhost/project%20of%20Local%20soccer%20league%20manager/css/ConfigMatchStyles.css">

</head>
<body>
    
  <?php 
    header('Content-Type: text/html; charset=utf-8');
    include 'Header.html'; 
  ?>

  <div class="ConfigMatch_title"> Matches Managments </div>
  <table class="matches_table">
    <tr>
      <th>Home Team</th>
      <th>Away Team</th>
      <th>HT goals</th>
      <th>AT goals</th>
      <th>Match Date</th>
      <th>Match Time</th>
      <th></th>
      <th>Save Changes</th>
      <th>Delete Match</th>
      
    </tr>
    <?php
      include '../php and database/SelectMatches.php';
      foreach($matches as $match){
        echo "<tr> <form action='../php and database/StoreMatche.php' method='post'>";
        echo "<td>";
          include '../php and database/TeamsOptions1.php';  
        
        echo "</td>";
        echo "<td>";
          include '../php and database/TeamsOptions2.php';  
          
        echo "</td>";
        // echo "<td> ".$match['home_team_score']."</td>";
        // echo "<td> ".$match['away_team_score']."</td>";
        // echo "<td>" . $match['match_date'] ."</td>";
        echo "<td> <input type='number' max='20' min='0' class='HT_goals_input' name='home_team_goals' value='".$match['home_team_score']."'> </td>";
        echo "<td> <input type='number' max='20' min='0' class='AT_goals_input' name='away_team_goals' value='".$match['away_team_score']."'> </td>";
        $datetime = new DateTime($match['match_date']);
        $date = $datetime->format('Y-m-d');
        $time = $datetime->format('H:i');          
        echo "<td> <input type= 'date' value='".$date."' name='match_date'> </td>";
        echo "<td> <input type= 'time' value='".$time."' name='match_time'> </td>";
        echo "<td> <input type='hidden' name='id' value='".$match['id']."'> </td>";
        echo "<td> <input type='submit' value='Save changes' class='save_button' </td></form>";
        echo "<td> <button class='delete_button'>Delete</button> </td>";
        echo "</tr>";
        
      }
    ?>
    
  </table>
<!-- ----------------------------------------------------- -->
  <div class="AddMatch_title">
    Add Match
  </div>
  <div class="match_form_container">
    <!-- ../php and database/StoreMatche.php -->
    <form action="../php and database/StoreMatche.php" method="post" id ="match_form" class="add_match_form">
      <div class="label_input_container">
        <label for="home_team">Home Team:</label>
        <!-- <span class="error">* echo $home_team_err ?></span> -->
        <?php
          
          $conn = new mysqli('localhost', 'root', '', 'legue');
        
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          else{
            $sql = "SELECT name FROM teams";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              echo '<select name="home_team" id="home_team" class="home_team_select" >';
              while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
              }
              echo '</select>';
          }
          else {
              echo 'No teams found';
          } 
          }
          $conn->close();
        ?>
      </div>
        
      <div class="label_input_container">
        <label for="away_team">Away Team:</label>
        <!-- <span class="error">* echo $away_team_err ?></span> -->
        <?php
          
          $conn = new mysqli('localhost', 'root', '', 'legue');
        
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          else{
            $sql = "SELECT name FROM teams ORDER BY name ASC";
          $result = $conn->query($sql);
          
          if ($result && $result->num_rows > 0) {
              echo '<select name="away_team" id="away_team" class="away_team_select" >';
              while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
              }
              echo '</select><br><br>';
          }
          else {
              echo 'No teams found';
          } 
          }
          $conn->close();
        ?>
      </div>
      <div id="error" style=" display: none; color: red;">The teams names cannot be the same</div>
      <div class="label_input_container">
        <label for="match_date">Match Date:</label>
        <!-- <span class="error">* echo $date_err ?></span> -->
        <input type="date" id="match_date" name="match_date" class="add_match_input" required><br>
      </div>
      <div class="label_input_container">
        <label for="match_time">Match Time:</label>
        <!-- <span class="error">* echo $time_err ?></span> -->
        <input type="time" id="match_time" name="match_time" class="add_match_input" required><br>
      </div>
      <h4>If the match not played yet Enter 0 as number of goals</h4>
      <div class="label_input_container">
        <label for="home_team_goals">Number of Goals for the Home Team:</label>
        <!-- <span class="error">* echo $home_team_goals_err ?></span> -->
        <input type="number" max="20" min="0" id="home_team_goals" name="home_team_goals" class="add_match_input" required></input><br>
      </div>
      <div class="label_input_container">
        <label for="away_team_goals">Number of Goals for the Away Team:</label>
        <!-- <span class="error">* echo $away_team_goals_err ?></span> -->
        <input type="number" max="20" min="0" id="away_team_goals" name="away_team_goals" class="add_match_input" required></input><br>
      </div>
      <input type="hidden" id="match_end_time" name="match_end_time" value="0">
      <input type="submit" class="add_match_button" value="Add Match">

      
    </form>

  </div>
  
        
  <script>
    console.log("JS is loaded");
// -------------------------------------------------------------  
        const homeTeam = document.getElementById('home_team');
        const awayTeam = document.getElementById('away_team');
        const home_team_goals = document.getElementById('home_team_goals');
        const away_team_goals = document.getElementById('away_team_goals');
        const match_form = document.getElementById('match_form');
        const match_date = document.getElementById('match_date');
        const match_time = document.getElementById('match_time');
        const match_end_time = document.getElementById('match_end_time');
        match_time.value = '20:00';
        match_end_time.value = '22:00';
        
        function updateEndTime() {
          if (match_date.value && match_time.value){
            let start_time = new Date(`${match_date.value}T${match_time.value}:00`);
            let end_time = new Date(start_time.getTime()+ (3 * 60 * 60 * 1000));
            match_end_time.value = end_time.toISOString().slice(0, 16).replace('T', ' ');
            console.log('Start:', start_time);
            console.log('End:', end_time);
            console.log('End time value:', match_end_time.value);
          } else {
            console.log("Please select a date and time");
          }
        }
        updateEndTime();
        match_date.addEventListener('change', () => {
          updateEndTime();
        });
        match_time.addEventListener('change', () => {
          updateEndTime(event);
        });
        const error = document.getElementById('error');
        homeTeam.addEventListener('change', () => {
          validateTeams(event);
        });
        awayTeam.addEventListener('change', () => {
          validateTeams(event);
        });
        function validateTeams(event) {
          if (homeTeam.value === awayTeam.value) {         
              
              homeTeam.selectedIndex = 0;
              awayTeam.selectedIndex = 0;
              error.style.display = 'block';
          } else {
              error.style.display = 'none';
          }
        }
        
          
        
// -------------------------------------------------------------
  const matches = <?php echo json_encode($matches); ?>;
  console.log('Loaded matches:');
  console.log(matches);
  const tablerows = document.querySelectorAll('.matches_table tr:not(:first-child)');
  console.log('Table rows:');
  for(let i=0; i<matches.length; i++){
    let row = tablerows[i];
    const select = row.querySelectorAll('select');
    select[0].value = matches[i]['home_team'];
    select[1].value = matches[i]['away_team'];
    console.log(row);
  }   
// -------------------------------------------------------------

  const deleteButtons = document.querySelectorAll('.matches_table .delete_button');
  for (let i=0; i<deleteButtons.length; i++){
    deleteButtons[i].addEventListener('click', (event) => {
      event.target.parentElement.parentElement.remove();
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        
        console.log(this.responseText);
        
      };
      xhttp.open("POST", "../php and database/DeleteMatch.php?id="+matches[i]['id'], true);
      xhttp.send();
    })
  }
  // -------------------------------------------------------------

        
  </script>
</body>
</html>