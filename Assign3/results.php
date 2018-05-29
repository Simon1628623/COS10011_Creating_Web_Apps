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

$email = $_SESSION["email"];

require_once ("header.php");
?>

		<!-- MAIN BODY -->
	   
			<h1>
			Results
			</h1>
			
		<form> 
		Name:<input type="text" name="name" id="name"/>
		</form>
		<form> 
		Score:<input type="text" name="score" id="score"/>
		</form>
		
		<?
		if (!$conn) {
		// Displays an error message
		echo "<p>Database connection failure</p>";//not in production script
		} else {
		$sql = "SELECT Score, Date, Time FROM attempts WHERE email = '$email' ORDER BY Date AND Time DESC;";
		//$result = $conn->query($sql);
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo  " - Score: " . $row["Score"]. " " . $row["Date"]. " " . $row["Time"]. "<br>";
		}
		} else {
		echo "0 results";
		}
		if(!$result) {
		echo "<p class=\"wrong\">Something is wrong with ", $sql, "</p>";
		//Would not show in a production script
		} 
		
// close the database connection
mysqli_close($conn);
}
		
		?>
		
			
	   </div>
	 
   <?
  require_once("footer.php");
  ?>