#!/usr/bin/php
<?PHP
	
	if ($argc != 2)
		exit (1);
	$i = 1;
	$exploded_str = explode(" ", $argv[1]);
	$array = array_filter($exploded_str);
	$len = sizeof($array);
	foreach($array as $elem)
	{
		echo "$elem";
		if ($i != $len)
			echo " ";
		$i++;
	}
	echo "\n";
?>