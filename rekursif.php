<?php
	echo 'Nomor 1 : <br><br>';
	$bts=5;
		function rekursif ($a = 1){
			global $bts;
				echo '*';
			$a++;
			if ($a <= $bts) {
				rekursif ($a);
			}
			else{ 
				echo '<br>';
					$bts--;
					if ($bts !=0) {
						rekursif ();
				    }
			  }
		}
		rekursif();
		"*==================================================================================*"
?>
