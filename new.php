<?php
foreach ($continents as $key => $value) {
	$cont=$key;
	foreach ($value as $animal) {
		$pos = strpos($animal, ' ');
			if ($pos === false) {
				$false_array[]=$animal;
			} else {
				$full_array[]=$animal;
				$exp=explode(" ", $animal);
				$first[]=$exp[0];
				$second[]=$exp[1];
			}
	}
}