<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <link rel="stylesheet" href="http://localhost/project%20of%20Local%20soccer%20league%20manager/css/TableStyles.css">
 
</head>
<body>
  
  <?php include 'Header.html'; ?>
    
  <div class="Table_title">
    Table
  </div>
  <main>
    <table class="league_table">
      <?php include '../php and database/SelectStandedTeams.php'; ?>
      <colgroup>
        <col  style="width: 5%; align-items: left;">   
        <col  style="width: 40%;">   
        <col  style="width: 5%;"> 
        <col  style="width: 5%;">
        <col  style="width: 5%;">
        <col  style="width: 5%;">
        <col  style="width: 5%;">
        <col  style="width: 5%;">
        <col  style="width: 5%;"> 
        <col  style="width: 15%;">   
        <col  style="width: 5%;">   
      </colgroup>
      <tr>
        <th class="pos_column">Pos</th>
        <th class="teams_column"><div>Team</div></th>
        <th>Pl</th>
        <th>W</th>
        <th>D</th>
        <th>L</th>
        <th>GF</th>
        <th>GA</th>
        <th>GD</th>
        <th>Form</th>
        <th>Pts</th>
      </tr>
      <!-- <tr>
        <td>1</td>
        <td>Manchester United</td>
        <td>38</td>
        <td>30</td>
        <td>4</td>
        <td>4</td>
        <td>89</td>
        <td>33</td>
        <td>56</td>
        <td>WDLWDL</td>
        <td>94</td>
      </tr> -->
    </table>
  </main>
  <script>
    const table = document.querySelector('.league_table');
    const teams = <?php echo json_encode($teams) ?>;
    for(let i=0; i<teams.length; i++){
      table.innerHTML += `
        <tr>
        <td>${teams[i]['position']}</td>
        <td><img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/${teams[i]['team_name']}.png" class="team_logo">${teams[i]['team_name']}</td>
        <td>${teams[i]['matches_played']}</td>
        <td>${teams[i]['wins']}</td>
        <td>${teams[i]['draws']}</td>
        <td>${teams[i]['losses']}</td>
        <td>${teams[i]['goals_for']}</td>
        <td>${teams[i]['goals_against']}</td>
        <td>${teams[i]['goal_difference']}</td>
        <td></td>
        <td>${teams[i]['pts']}</td>
      </tr>
      `;
        
    }

  </script>
</body>
</html>