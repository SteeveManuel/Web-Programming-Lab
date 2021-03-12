<html>
<body>
<form method="post">
	<input type="text" name="start">
	<input type="text" name="end">
	<input type="submit" name="btn" value="submit">
</form>
<?php
	if(isset($_POST['btn']))
	{
		$a=$_POST['start'];
		$b=$_POST['end'];
		echo "prime numbers in range ( ",$a,",", $b," ) is ";
		for($i=$a;$i<=$b;$i++)
		{	
			$n=0;
			for($j=2;$j<$i;$j++)
			{
				if($i%$j==0)
					$n=1;
			}
			if($n==0)
				echo $i.'  ';
		}
	}
?>
</body>
</html>




