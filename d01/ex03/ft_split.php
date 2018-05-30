#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$str2 = explode(" ", $str);
	$rtn = array_filter($str2);
	sort($rtn);
	return ($rtn);
}

?>