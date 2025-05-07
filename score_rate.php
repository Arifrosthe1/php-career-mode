<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>mainpage</title>
  
  </head>
  <body>
    <h1>Score Test</h1>
    <p><b><i>check</i> <u>you</u></b> <strong>mark</strong>.</p>
    <hp>
      <?php
      echo "Hello, World!";
      $passmark = 50;
      // $score = 60;
      // $name = "John Doe";
      // $score = 30;
      // $name = "John Bear";
      $score = 40;
      $name = "John Dennin";
  
      if ($score > $passmark) {
    echo "<br>Congratulations ". $name . "! You have passed the exam with a score of " . $score . ".";
    }else {
    echo "<br>Sorry " . $name . ". You have failed the exam with a score of " . $score . ".";
    }
    echo "<br>Goodbye!";
    ?>
  </body>
</html> 