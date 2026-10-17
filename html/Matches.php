<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matches</title>
  <link rel="stylesheet" href="http://localhost/project%20of%20Local%20soccer%20league%20manager/css/MatchesStyles.css">
</head>
<body>
  
  <div>
    <!-- header = menu + logo + matches + table + clubs + players + tansfers -->
    <?php include 'Header.html'; ?>

  <div class="Matches_title">
    Matches
  </div>
  <div class="matches_container">
    <!-- Today Matches -->
    <div class="today_matches">
      <h3>Today's Matches</h3> 
      <?php include '../php and database/SelectTodayMatches.php' ?> 
    </div>

<!-- 
     Tommorrow Matches -->
    <div class="tommorrow_matches">
      <h3>Tomorrow's Matches</h3>
      <?php include '../php and database/SelectTomorrowMatches.php'; ?>
      <!-- <div class="match_card">
        <div class="team">
          <span class="team_name">Team A</span>
          <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Borussia Dortmund.png" class="team_logo">
          
        </div>
        <div class="match_info">
          <span class="match_time">15:00</span>
        </div>
        <div class="team">
          <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Manchester City.png" class="team_logo">
          <span class="team_name">Team B</span>
        </div>
      </div> -->
    </div>
  </div>
  <script>
    // const xhttp = new XMLHttpRequest();
    // xhttp.onload = function(){

    
    // }
    const todayMatchesDiv = document.querySelector('.today_matches');
    const tomorrowMatchesDiv = document.querySelector('.tommorrow_matches');
    const todayMatches = <?php echo json_encode($today_matches) ?>;
    
      for(let i=0; i<todayMatches.length; i++){
      console.log(todayMatches[i]['home_team'], todayMatches[i]['away_team'], todayMatches[i]['match_date']);
      todayMatchesDiv.innerHTML += `<div class="match_card">
        <div class="team">
          <span class="team_name">${todayMatches[i]['home_team']}</span>
          <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/${todayMatches[i]['home_team']}.png" class="team_logo">

        </div>
        <div class="match_info">
          <span class="match_time">${todayMatches[i]['match_date']}</span>
        </div>
        <div class="team">
          <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/${todayMatches[i]['away_team']}.png" class="team_logo">
          <span class="team_name">${todayMatches[i]['away_team']}</span>
        </div>
        </div>`;
      }
    
    
    //-------------------------------------------------------------------------------------------
    const tomorrowMatches = <?php echo json_encode($tomorrow_matches) ?>;
    
      for(let i=0; i<tomorrowMatches.length; i++){
      // console.log(tomorrowMatches[i]['home_team'], tomorrowMatches[i]['away_team'], tomorrowMatches[i]['match_date']);
      tomorrowMatchesDiv.innerHTML += `<div class="match_card">
        <div class="team">
          <span class="team_name">${tomorrowMatches[i]['home_team']}</span>
          <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/${tomorrowMatches[i]['home_team']}.png" class="team_logo">

        </div>
        <div class="match_info">
          <span class="match_time">${tomorrowMatches[i]['match_date']}</span>
        </div>
        <div class="team">
          <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/${tomorrowMatches[i]['away_team']}.png" class="team_logo">
          <span class="team_name">${tomorrowMatches[i]['away_team']}</span>
        </div>
        </div>`;
      }
    

  </script>
</body>
</html>