<?php
	// Get the temperature in degrees Fahrenheit
  const MAX= 6;
  const MIN= 1;
	$userNumber = $_POST["user-number"];
  $randomNumber= rand(MAX,MIN);
  if ($userNumber==$randomNumber) {
    echo "Your number was ".$userNumber." and the number that was chosen was ".$randomNumber.". You guessed right!";
  }
 if ($userNumber!=$randomNumber) {
    echo "Your number was ".$userNumber." and the number that was chosen was ".$randomNumber.". You guessed wrong! Try again!";
  }
?>