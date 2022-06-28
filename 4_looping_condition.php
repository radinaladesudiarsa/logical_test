<?php
	for ($i=1; $i <= 50; $i++) { 
		if ($i%3 == 0) {
			if($i%3== 0 && $i%5 == 0){
				echo $i;
				echo "FooBar".'<br>';
			}else{
				echo $i;
				echo "Foo".'<br>';
			}
		}elseif($i%5 == 0){
			echo $i;
			echo "Bar".'<br>';
		}
	}
?>