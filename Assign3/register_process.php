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
	
$email = htmlspecialchars($_POST["Email"]);
//$email = $_POST["Email"];
$firstname = htmlspecialchars($_POST["firstName"]);
$lastname = htmlspecialchars($_POST["lastName"]);
$phone = htmlspecialchars($_POST["Phone"]);
$snumber = htmlspecialchars($_POST["streetnumber"]);
$address = htmlspecialchars($_POST["Address"]);
$suburb = htmlspecialchars($_POST["Suburb"]);
$state = htmlspecialchars($_POST["State"]);
$postcode = htmlspecialchars($_POST["PostCode"]);
$password = htmlspecialchars($_POST["psw"]);
$dob = htmlspecialchars($_POST["DOB"]);
$gender = htmlspecialchars($_POST["sex"]);

$_SESSION["email"] = $email;



$sql = "SELECT * FROM users WHERE email = '$email';";

$result = mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if($count==1){

//Process this information if there is a match
echo "<p class=\"wrong\">Email already taken. </p>";
}
else
{

$sql_table = 'users';

$query = "insert into $sql_table (email, firstname, lastname, phone, streetnumber, streetname, suburb, state, postcode, password, birthday, gender) values ('$email', '$firstname', '$lastname', '$phone', '$snumber', '$address', '$suburb', '$state', '$postcode', '$password', '$dob', '$gender')";
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
header("Location: quiz.php");
} // if successful query operation
// close the database connection
mysqli_close($conn);
 // if successful database connection	
	

}	
}


?>