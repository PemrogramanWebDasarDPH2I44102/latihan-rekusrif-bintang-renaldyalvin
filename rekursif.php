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
		echo '<br><br>';
		
		echo "/*==================================================================================*/";
			echo '<br><br>';
	echo 'Nomor 2 : <br><br>';
	$angk=1;
		function r2 ($b=1){
			global $angk;
			echo $b;
		$b++;
			if($b<=$angk) {
				r2 ($b);
		}
			else{
				echo'<br>';
				$angk++;
				if($angk <= 5){
				r2();
			}
		}
	}
	r2();
?>
