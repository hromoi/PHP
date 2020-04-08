#!/usr/bin/php
<?php
fscanf(STDIN, "%d", $coll);
$str = preg_split("/[\s]+/", trim(fgets(STDIN)));
$change = 0;
$evenn = 0;
$oddd = 0;
for ($i = 0; $i < $coll; $i++)
{
	if ($str[$i] % 2 == 0)
	{
		$evenn++;
		$i % 2 == 0 ? $evenpos++ : $eddpos++;
	}
	else
		$oddd++;
}
if ($evenn - $oddd != 1 && $evenn - $oddd != -1 && $evenn - $oddd != 0)
	exit ("-1\n");
$evenn > $oddd || ($evenn == $oddd && $evenpos > $eddpos) ? chet($str, $coll, $change) : nechet($str, $coll, $change);
function nechet($str, $coll, $change)
{
	$index = 0;
	for ($i = 0; $i < $coll; $i++){
		if ($str[$i] % 2 == 0 && $i % 2 == 0){
			for ($j = $index; $j < $coll; $j++){
				if ($str[$j] % 2 != 0 && $j % 2 != 0){
					$tmp = $str[$i];
					$str[$i] = $str[$j];
					$str[$j] = $tmp;
					$change += 2;
					break;
				}
			}
			$index = $j;
		}
	}
	printf("%d\n%s\n", $change, implode(" ", $str));
}
function chet($str, $coll, $change)
{
	$index = 0;
	for ($i = 0; $i < $coll; $i++){
		if ($str[$i] % 2 == 0 && $i % 2 != 0){
			for ($j = $index; $j < $coll; $j++){
				if ($str[$j] % 2 != 0 && $j % 2 == 0){
					$tmp = $str[$i];
					$str[$i] = $str[$j];
					$str[$j] = $tmp;
					$change += 2;
					break;
				}
			}
			$index = $j;
		}
	}
	printf("%d\n%s\n", $change, implode(" ", $str));
}

// fscanf(STDIN, "%d", $coll);
// $str = preg_split("/[\s]+/", trim(fgets(STDIN)));
// $change = 0;
// $evenn = 0;
// $oddd = 0;
// for ($i = 0; $i < $coll; $i++)
// 	$str[$i] % 2 == 0 ? $evenn++ : $oddd++;
// if ($evenn - $oddd != 1 && $evenn - $oddd != -1 && $evenn - $oddd != 0)
// 	exit ("-1\n");
// $evenn > $oddd ? chet($str, $coll, $change) : nechet($str, $coll, $change);
// function nechet($str, $coll, $change)
// {
// 	$index = 0;
// 	for ($i = 0; $i < $coll; $i++)
// 	{
// 		if ($str[$i] % 2 == 0 && $i % 2 == 0)
// 		{
// 			for ($j = $index; $j < $coll; $j++)
// 			{
// 				if ($str[$j] % 2 != 0 && $j % 2 != 0)
// 				{
// 					$tmp = $str[$i];
// 					$str[$i] = $str[$j];
// 					$str[$j] = $tmp;
// 					$change += 2;
// 					break;
// 				}
// 			}
// 			$index = $j;
// 		}
// 	}
// 	printf("%d\n%s\n", $change, implode(" ", $str));
// }

// function chet($str, $coll, $change)
// {
// 	$index = 0;
// 	for ($i = 0; $i < $coll; $i++)
// 	{
// 		if ($str[$i] % 2 == 0 && $i % 2 != 0)
// 		{
// 			for ($j = $index; $j < $coll; $j++)
// 			{
// 				if ($str[$j] % 2 != 0 && $j % 2 == 0)
// 				{
// 					$tmp = $str[$i];
// 					$str[$i] = $str[$j];
// 					$str[$j] = $tmp;
// 					$change += 2;
// 					break;
// 				}
// 			}
// 			$index = $j;
// 		}
// 	}
// 	printf("%d\n%s\n", $change, implode(" ", $str));
// }
?>