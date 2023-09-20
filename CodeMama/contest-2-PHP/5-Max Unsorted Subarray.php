<?php
// PHP program to find the Minimum length Unsorted Subarray,
// sorting which makes the complete array sorted
function printUnsorted(&$arr, $n)
{
	$s = 0;
	$e = $n - 1;
	
	// step 1(a) of above algo
	for ($s = 0; $s < $n - 1; $s++)
	{
		if ($arr[$s] > $arr[$s + 1])
		break;
	}
	if ($s == $n - 1)
	{
		echo "-1";
		return;
	}
	
	// step 1(b) of above algo
	for($e = $n - 1; $e > 0; $e--)
	{
		if($arr[$e] < $arr[$e - 1])
		break;
	}
	
	// step 2(a) of above algo
	$max = $arr[$s];
	$min = $arr[$s];
	for($i = $s + 1; $i <= $e; $i++)
	{
		if($arr[$i] > $max)
			$max = $arr[$i];
		if($arr[$i] < $min)
			$min = $arr[$i];
	}
	
	// step 2(b) of above algo
	for( $i = 0; $i < $s; $i++)
	{
		if($arr[$i] > $min)
		{
			$s = $i;
			break;
		}	
	}
	
	// step 2(c) of above algo
	for( $i = $n - 1; $i >= $e + 1; $i--)
	{
		if($arr[$i] < $max)
		{
			$e = $i;
			break;
		}
	}
		
	// step 3 of above algo
	echo ($s+1) . " " . ($e+1);
							
	return;
}

// Driver code
fscanf(STDIN, "%d", $n);
$arr = explode(" ", fgets(STDIN));
printUnsorted($arr, $n);

// This code is contributed
// by ChitraNayal
?>
