<html>
<body>
<?php
	
	$a=1;
	$b=0;
	$n=0;
	
	while($n<100)
	{
		echo $n.' ';
		$n=$a+$b;
		
		$a=$b;
		$b=$n;
		
	}
?>
</body>
</html>
