<!DOCTYPE html>
<!-- Unit4-01-PHP-GuessMyNumber-->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Random Number Guesser in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Julien L.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index_php/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index_php/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index_php/favicon-16x16.png">
    <link rel="manifest" href="./fav_index_php/site.webmanifest">
    <!--Link to MDL-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Random Number Guesser in PHP</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Header and Text-->
    <center>
      <?php echo "<h1>Random Number Guesser in PHP </h1>" ?>
      <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
      <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
      <br>
      <!--User Input-->
      <?php echo "<h3>Please enter the following:</h3>" ?>
      <form action="./results.php" method="post" target="result">
        <label for="user-number">Enter your number: </label>
        <input type="number" id="user-number" step=".001" placeholder="Your guess" name="user-number"><br><br>
         <input type="submit" value="Guess"><br><br>	
      <!--Display results-->
      <iframe id="result" name="result">
      <?php 
  if ($userNumber==$randomNumber) {
    echo "Your number was ".$userNumber." and the number that was chosen was ".$randomNumber.". You guessed right!";
  }
 if ($userNumber!=$randomNumber) {
    echo "Your number was ".$userNumber." and the number that was chosen was ".$randomNumber.". You guessed wrong! Try again!";
  }
?>
      </iframe>
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </center>
  </body>
</html>