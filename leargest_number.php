<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		find the leargest Number
	</title>
</head>
<body>
	<form method="POST" action="">

		Enter Your Numbers: <input type="text" name="number">
		<input type="submit" name="submit" value="find Leargest">
		
	</form>

</body>
</html>




<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$numbers = $_POST['number'];
	$numarray = array_map('trim',explode(",",$numbers)); // trim and string to array

	$numarray1 = array_filter($numarray,'is_numeric'); //array value numeric ki na check

	if(!empty($numarray1))
	{
		$largest = $numarray1[0];
		foreach ($numarray1 as $value)
		 {
			if($value>=$numarray1[0])
			{
				$largest = $value;
			}
		}
		echo "The Largest Number is ".$largest;
	}
	else
	{
		echo "Please Enter Valid NUmber";
	}


}



?>