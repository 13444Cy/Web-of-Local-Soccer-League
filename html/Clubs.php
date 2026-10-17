<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <link rel="stylesheet" href="http://localhost/project%20of%20Local%20soccer%20league%20manager/css/ClubsStyles.css">
    
  </head>
  <body>
    
    
      <!-- header = menu + logo + matches + table + clubs + players + tansfers -->
      <?php include 'Header.html'; ?>

    <div class="Clubs_title">
      Clubs
    </div>

    <main
    style="
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;
      padding: 20px;
      background-color: #f4f4f4;
    "
    >
      <!-- Barcelen -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/FC Barcelona.png"  class="club_logo">
        <div class="club_details">
          <h3 class="club_name">FC Barcelona</h3>
           <p>
            Founded: 1899 <br>
            Stadium: Campno <br>
            Owner: Joan Laporta <br>
          </p>
        </div>
      </div>
      <!-- Real madrid-->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Real Madrid.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Real Madrid</h3>
           <p>
            Founded: 1902 <br>
            Stadium: Virnabio <br>
            Manager: Florentino P?rez <br>
          </p>
        </div>
      </div>
      <!-- Manchester United -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Manchester United.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Manchester United</h3>
           <p>
            Founded: 1878 <br>
            Stadium: Old Trafford <br>
            Owner: Glazer Family <br>
          </p>
        </div>
      </div>
      <!-- Liverpool -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Liverpool FC.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Liverpool</h3>
           <p>
            Founded: 1892 <br>
            Stadium: Anfield <br>
            Owner: Fenway Sports Group <br>
          </p>
        </div>
      </div>
      <!-- Chelsea -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Chelsea FC.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Chelsea FC</h3>
           <p>
            Founded: 1905 <br>
            Stadium: Stamford Bridge <br>
            Owner: Todd Boehly <br>
          </p>
        </div>
      </div>
      <!-- Bayern Munich -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Bayern Munich.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Bayern Munich</h3>
           <p>
            Founded: 1900 <br>
            Stadium: Allianz Arena <br>
            Owner: Herbert Hainer <br>
          </p>
        </div>
      </div>
      <!--Juventus-->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Juventus.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Juventus</h3>
           <p>
            Founded: 1897 <br>
            Stadium: Allianz Stadium <br>
            Owner: Andrea Agnelli <br>
          </p>
        </div>
      </div>
            <!-- Paris Saint-Germain -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Paris Saint-Germain.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Paris Saint-Germain</h3>
           <p>
            Founded: 1970 <br>
            Stadium: Parc des Princes <br>
            Owner: Qatar Sports Investments <br>
          </p>
        </div>
      </div>
      <!--Broussia Dortmund-->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Borussia Dortmund.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Borussia Dortmund</h3>
           <p>
            Founded: 1909 <br>
            Stadium: Signal Iduna Park <br>
            Owner: Reinhard Rauball <br>
          </p>
        </div>
      </div>
      <!--Bayer Liverkuzen-->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Bayer Leverkusen.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Bayer Leverkusen</h3>
           <p>
            Founded: 1904 <br>
            Stadium: BayArena <br>
            Owner: Bayer AG <br>
          </p>
        </div>
      </div>
      <!--Napoli-->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Napoli.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">SSC Napoli</h3>
           <p>
            Founded: 1926 <br>
            Stadium: Stadio Diego Armando Maradona <br>
            Owner: Aurelio De Laurentiis <br>
          </p>
        </div>
      </div>
      <!--Tottenham Hotspur-->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Tottenham Hotspur.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Tottenham Hotspur</h3>
           <p>
            Founded: 1882 <br>
            Stadium: Tottenham Hotspur Stadium <br>
            Owner: ENIC Group <br>
          </p>
        </div>
      </div>
      <!-- Olympique Marseille -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Olympique Marseille.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Olympique Marseille</h3>
           <p>
            Founded: 1899 <br>
            Stadium: Stade V?lodrome <br>
            Owner: Frank McCourt <br>
          </p>
        </div>
      </div>
      <!-- AC Milan -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/AC Milan.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">AC Milan</h3>
           <p>
            Founded: 1899 <br>
            Stadium: San Siro <br>
            Owner: RedBird Capital Partners <br>
          </p>
        </div>
      </div>
      <!-- Manchester City -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Manchester City.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Manchester City</h3>
           <p>
            Founded: 1880 <br>
            Stadium: Etihad Stadium <br>
            Owner: City Football Group <br>
          </p>
        </div>
      </div>
      <!-- Arsenal FC -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Arsenal FC.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Arsenal FC</h3>
           <p>
            Founded: 1886 <br>
            Stadium: Emirates Stadium <br>
            Owner: Kroenke Sports & Entertainment <br>
          </p>
        </div>
      </div>
      <!-- AS Roma -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/AS Roma.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">AS Roma</h3>
           <p>
            Founded: 1927 <br>
            Stadium: Stadio Olimpico <br>
            Owner: Dan Friedkin <br>
          </p>
        </div>
      </div>
      <!-- AS Monaco -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/AS Monaco.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">AS Monaco</h3>
           <p>
            Founded: 1924 <br>
            Stadium: Stade Louis II <br>
            Owner: Dmitry Rybolovlev <br>
          </p>
        </div>
      </div>

      <!-- Atlético de Madrid -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Atlético de Madrid.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Atlético de Madrid</h3>
           <p>
            Founded: 1903 <br>
            Stadium: Wanda Metropolitano <br>
            Owner: Miguel Ángel Gil Marín <br>
          </p>
        </div>
      </div>
      <!-- Inter Milan -->
      <div class="club_card">
        <img src="http://localhost/project%20of%20Local%20soccer%20league%20manager/Teams/Inter Milan.png" class="club_logo">
        <div class="club_details">
          <h3 class="club_name">Inter Milan</h3>
           <p>
            Founded: 1908 <br>
            Stadium: San Siro <br>
            Owner: Suning Holdings Group <br>
          </p>
        </div>
      </div>

    </main>
    
  </body>
</html>