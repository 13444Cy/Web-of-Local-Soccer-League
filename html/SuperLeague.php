
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="http://localhost/project%20of%20Local%20soccer%20league%20manager/css/HomeStyles.css">
  
  <title>SuperLeague</title>
</head>
<body>
  <div>
    <!-- header = menu + logo + matches + table + clubs + players + tansfers -->
    
    <?php include 'Header.html'; ?>
    
    <!-- Main content -->
     <main class="main_content">
      <!--League STATS-->
      <div class="league_stats">
        <h2 class="stats">League Stats</h2>
        Total Matches: <var class="total_matches"></var> <br><br>
        Total Goals: <var class="total_goals"></var> <br><br>
        Average Goals per Match: <var class="avg_goals"></var> <br><br>
        Best Attacking Team: <var class="best_attacking"></var> <br><br>
        Best Defensive Team: <var class="best_defensive"></var> <br>
      </div>
      <!--Firs five Teams in the Table -->
      <div class="league_table_section">
        <div>
          <h2 class="league_table">League Table - Top 5 Teams</h2>
          <table class="table_5positions">
            <thead>
              <tr>
                <th>Position</th>
                <th>Team</th>
                <th>Played</th>
                <th>Pts</th>
              </tr>
            </thead>
            <tbody class="table_body">
              <!-- Top 5 teams will be dynamically populated here -->
            </tbody>
          </table>
        </div>
        <button class="view_all_table">view all</button>
      </div>
      <!--Top Scorers-->
      <div class="top_scorers_section">
        <h2 class="top_scorers">Top Scorers</h2>
        <ol class="scorer_list">
          <!-- List of top scorers will be dynamically populated here -->
        </ol>
      </div>
      <!--Today Matches-->
      <div class="today_matches_section">
        <h2 class="today_matches_title">Today's Matches</h2>
        
          
            <!-- List of today's matches will be dynamically populated here -->
        <div class="today_matches">
          <div class="match_card">
              <div class="team">
                <span class="team_name">Team A</span>
                <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Arsenal%20FC.png" class="team_logo">
                
              </div>
              <div class="match_info">
                <span class="match_time">15:00</span>
              </div>
              <div class="team">
                <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Bayern Munich.png" class="team_logo">
                <span class="team_name">Team B</span>
              </div>
            </div>
              <div class="match_card">
                <div class="team">
                  <span class="team_name">Team A</span>
                  <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Chelsea FC.png" class="team_logo">
                  
                </div>
                <div class="match_info">
                  <span class="match_time">19:00</span>
                </div>
                <div class="team">
                  <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Juventus.png" class="team_logo">
                  <span class="team_name">Team B</span>
                </div>
            </div>
              <div class="match_card">
                <div class="team">
                  <span class="team_name">Team A</span>
                  <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Paris Saint-Germain.png" class="team_logo">
                  
                </div>
                <div class="match_info">
                  <span class="match_time">22:00</span>
                </div>
                <div class="team">
                  <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Liverpool FC.png" class="team_logo">
                  <span class="team_name">Team B</span>
                </div>
              </div>   
        </div>
          
        
        <!-- <button class="view_all_matche">
          <a href="http://localhost/project%20of%20Local%20soccer%20league%20manager/html/Matches.html">
            view all
          </a>
        </button> -->
        <button class="view_all_matche" onclick="window.location.href='http://localhost/project%20of%20Local%20soccer%20league%20manager/html/Matches.html'">
            view all
        </button>
      </div>
     </main>
  </div>
</body>
</html>