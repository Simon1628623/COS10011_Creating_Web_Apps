<?php
session_id('data');
session_start();
require_once ("settings.php");
//connection info
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);

// Checks if connection is successful
if (!$conn) {
// Displays an error message
echo "<p>Database connection failure</p>";//not in production script
} else {
	
$q1 = htmlspecialchars($_POST["question1"]);
$q2 = htmlspecialchars($_POST["question2"]);
$q21 = htmlspecialchars($_POST["question21"]);
$q22 = htmlspecialchars($_POST["question22"]);
$q3 = htmlspecialchars($_POST["question3"]);
$q4 = htmlspecialchars($_POST["question4"]);
$msg = htmlspecialchars($_POST["message"]);

/////////////////email not getting added to attempt table
if($_SESSION["email"] != null)
{
$email = $_SESSION['email'];
}

$email2 = $email;

echo $email2;

if ($email = null) {echo "please register"; header("Location: register.php"); }
//else{echo "<p>session not read</p>"; print_r($_SESSION);}
$date = date("Y-m-d");

$score = 0;

if($q1 != null){if($q1 == "correct"){$score += 1;}}
if($q2 != null){if($q2 == "correct"){$score += 1;}}
if($q21 != null){if($q21 == "correct"){$score += 1;}}
if($q22 != null){if($q22 == "correct"){$score += 1;}}
if($q3 != null){if($q3 == "identifier"){$score += 1;}}
if($q4 != null){if($q4 == "Chrome"){$score += 1;}}


$query2 = "CREATE TABLE IF NOT EXISTS `attempts` (
  `Attempt ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` text CHARACTER SET latin1 NOT NULL,
  `Score` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  PRIMARY KEY (`Attempt ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7;";

$result2 = mysqli_query($conn, $query2);




$sql_table = 'attempts';

$query = "insert into $sql_table (email, Score, Date, Time) values ('$email2', '$score', '$date', NOW())";
// execute the query -we should really check to see if the database exists first.
$result = mysqli_query($conn, $query);
// checks if the execution was successful
if(!$result) {
echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
 //Would not show in a production script
} 
else {
// display an operation successful message
echo "<p class=\"ok\">Successfully added user to database</p>";
header("Location: results.php");
} // if successful query operation
// close the database connection
mysqli_close($conn);
 // if successful database connection	
	


}


?>