#!/usr/bin/php
<?php
fscanf(STDIN, "%d", $coll);
printf("%d\n", array_sum(array_unique(preg_split("/[\s]+/", trim(fgets(STDIN))))));
?>