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
<h1>Creating Web Applications - PHP Guessing Game</h1>
<?php
echo "<p>how many shots you have: ", $num , "</p>"; // displays the number


if (isset($_POST['guess'])) {
    echo guess();
    return;
}

if (isset($_POST['giveup'])) {
    echo giveup();
    return;
}
?>
<form action="" method="POST">
	Guess: <input type="number" name="guess">
	<input type="submit" name="submit" value="Guess">
</form>
	<p><a href="numberreset2.php">Reset</a></p>
	
	<form action="" method="POST">
	
	<input type="submit" name="giveup" value="give up">
</form>
	
</body>
</html>

<?
function guess(){
$nbr = rand(1,100);
$_SESSION["nbr"] = $nbr;

$guess = $_POST['guess'];

$_SESSION["number"] ++;
$submit = $_POST['submit'];

if(isset($submit)) {
	
	if($guess<1 || $guess>100) {
	echo "must be betweeen 1 to 100";	
	} else{
		if($guess!=$nbr) {
			if($guess > $nbr){
				echo "number is less than guess";
			}
			if($guess < $nbr){
				echo "number is greater than guess";
			}
		} else {
		echo "correct answer!";	
		}
	
	}
	
} else{
header("Location: guessinggame.php");
exit();	
}
}


function giveup(){
echo "the answer was " . $_SESSION["nbr"]; 	
	
}
?>