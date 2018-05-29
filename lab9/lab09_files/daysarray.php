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
$days = array ('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
$daysCount = count($days);

for($i = 0; $i < $daysCount; $i++)
{

echo "<p>The current day is: </p>";
echo $days[$i];
}


$days = array ('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
for($i = 0; $i < $daysCount; $i++)
{

echo "<p>The current day in french is: </p>";
echo $days[$i];
}

?>
</body>
</html>