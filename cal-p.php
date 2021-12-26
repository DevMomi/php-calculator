<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<div style="margin: 200px auto;">
	<form method="POST">
<input type="number" name="fill1" placeholder="Enter 1st Number">
<br>	
<input type="number" name="fill2" placeholder="Enter 2nd Number">
<br>
<select name="operator">
	<option value="add" >ADD</option>
	<option value="sub">SUB</option>
	<option value="multi">MULTI</option>
	<option value="div">DIV</option>
	

</select>


<br>
<input type="submit" name="btn" value="Enter">

<p>
	
<?php

if (isset($_POST['btn'])) {
	$num1 = $_POST['fill1'];
	$num2 = $_POST['fill2'];

$operation = $_POST['operator'];

switch ($operation) {
	case "add":
		$add = $num1 + $num2;
		echo "Answer Is " .$add;
		break;

	case 'sub':
			$sub = $num1 - $num2;
			echo "Answer is ".$sub;
			break;	
	
	case 'multi':
		
		$multi = $num1 * $num2;
		echo "Answer Is ".$multi;
		break;

    case 'div':
    	$div = $num1 / $num2;
    	echo "Answer is ".$div;

    	break;

	default:
		"somthing  is wrong";
		break;
}

}

?>

</p>
</form>

</div>

</center>
</body>
</html>