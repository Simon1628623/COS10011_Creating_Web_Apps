<?php
 session_start(); // start the session
 if (!isset ($_SESSION["number"])) { // check if session variable exists
 $_SESSION["number"] = 0; // create and set the session variable
 }
 $num = $_SESSION["number"]; // copy the value to a variable
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8" />
<meta name="description" content="Playing with PHP Sessions" />
<title>PHP Sessions Lab</title>
</head>
<body>
<h1>Creating Web Applications - PHP Sessions Lab</h1>
<?php
echo "<p>The number is", $num , "</p>"; // displays the number
?>
<p><a href="numberup.php">Up &#x2191;</a></p><!-- links to updating pages -->
<p><a href="numberdown.php">Down &#x2193;</a></p>
<p><a href="numberreset.php">Reset</a></p>
</body>
</html>