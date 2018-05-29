<?
$nbr = rand(1,100);

$guess = $_POST['guess'];

$submit = $_POST['submit'];

if(isset($submit)) {
	
	if($guess<1 || $guess>100) {
	echo "must be betweeen 1 to 100";	
	} else{
		if($guess!=$nbr) {
		echo "wrong true answer is" . $nbr;	
		} else {
		echo "correct answer!";	
		}
	
	}
	
} else{
header("Location: guessinggame.php");
exit();	
}
?>