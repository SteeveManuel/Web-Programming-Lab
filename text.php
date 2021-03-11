<html>
<body>

<form method="post">
	<input type="text" name="num">
	<input type="submit" name="btn1" value="submit">
</form>
<?php

	if(isset($_POST['btn1']))
	{
		$a=$_POST['num'];
		echo $a.'  ';
		if($a%2==0)
		{
			echo "number is even";

	 	}
		else
		{
			echo "number is odd";
		}
	}	
?>
</body>
</html>
