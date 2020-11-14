
<!DOCTYPE html>
<html>
<body>

<h1>Awesome app</h1>
<p>The future is here</p>
Enter 2 numbers<br>
 <form action="engine.php" method="get">
  <p><input type="number" name="a"></p>
  <p><input type="number" name="b"></p>
  <p><input type="submit" value="calculate"></p>
 </form>
<?php

# $value = '7538945345345234234234';
# setcookie("IdSession", $value);


if ($_GET['a'] && $_GET['b']){
	



$a = $_GET['a'];
$b = $_GET['b'];

if (is_numeric($a) and is_numeric($b)) {
		$c = $a+$b;
		print ("$a+$b=$c");
} else {
	print("Something went wrong");
}

}


?>
</body>
</html>

