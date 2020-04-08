#!/usr/bin/php
<?php
preg_match_all("/(\D?)(\d*)/", trim(fgets(STDIN)), $matches, PREG_PATTERN_ORDER);
$result = 0;
unset($matches[2][count($matches[2]) - 1]);
for ($i = 0; $i < count($matches[2]); $i++)
{
	if (empty($matches[2][$i]))
		$result += 1;
	else
		$result += $matches[2][$i];
}
echo $result."\n";
?>