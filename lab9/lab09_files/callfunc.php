<body>
<?php
include ("mathfunctions.php");
//makes functions in the included fileavailable
?>
<h1>
Creating Web Applications-Lab9
</h1>
<?php
$num = 5;
//enter some different values here to test- remove later
if (isPositiveInteger($num))
{
//call the function we defined in the previous step
echo "<p>", $num, "! is ",factorial ($num), ".</p>";
//ditto for factorial
} else {
// number is not an integer
echo "<p>Please enter a positive integer.</p>";
}
echo "<p><a href='factorial.html'>Returntothe Entry Page</a></p>";
?>
</body> 