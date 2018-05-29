<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Using PHP variables, arrays and operators</title>
</head>
<body>
<h1>
Creating Web Applications-Lab 9
</h1>
<?php
$marks = array (85,85, 95);
// declare and initialise array
$marks[1] = 90;
// modify second element
$ave = ($marks[0] + $marks[1] + $marks[2]) / 3;
// compute average
if($ave >= 50)
// check status
$status = "PASSED";
else
$status = "FAILED";
echo "<p>The average score is $ave. You $status.</p>";
?>
</body>
</html>