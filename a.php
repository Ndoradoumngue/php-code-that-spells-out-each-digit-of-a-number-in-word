<?php 

//Function start

function num_toWord($param)
{
	//Make sure to surrounder input number with quotes to read it as an array
	$num = "'".$param."'";
	
	//Preparing array of numbers in word to output   
	$arrayName = array(' zero ', ' one ', ' two ', ' three ', ' four ', ' five ', ' six ', ' seven ', ' eight ', ' nine ');

	//Getting the length of the input number
	$nbrLength = strlen($num)-1;
	
	//For each diggit in the number
	for ($i=0; $i < $nbrLength; $i++) { 
		
		//Loop untill the diggit to compare it's index with the array of words		

		for ($j=1; $j <= $num[$i]; $j++) { 
			
			//Get the diggit in word
			$inWord = $arrayName[$j];
		}
		
		//Appending the diggits in word as output
		$output .= $inWord;

	}
	
	//Returning the output

	return $output;

}

//End function


//Function call
echo num_toWord(4367);



?>
