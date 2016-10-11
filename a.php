<?php 


function num_toWord($param)
{
	$num = "'".$param."'";
   
$arrayName = array(' zero ', ' one ', ' two ', ' three ', ' four ', ' five ', ' six ', ' seven ', ' eight ', ' nine ');

$nbrLength = strlen($num)-1;


for ($i=0; $i < $nbrLength; $i++) { 

for ($j=1; $j <= $num[$i]; $j++) { 

	$inWord = $arrayName[$j];
}

$output .= $inWord;

}

echo $output;

}

echo num_toWord(4367);



?>