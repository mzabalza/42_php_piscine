#!/usr/bin/php
<?PHP

// $handle = fopen("php://stdin","r");

while(1)
{
	echo "Enter a number: ";
	$nb = fgets(STDIN);
	if ($nb == FALSE)
    {
        echo "\n";
        break;
    }
    $nb = trim($nb);
	if (is_numeric($nb))
	{
		echo "The number $nb is ";
		if ($nb % 2)
			echo "odd";
		else
			echo "even";
		echo "\n";
	}
	else
		echo "'$nb' is not a number\n";
}

?>