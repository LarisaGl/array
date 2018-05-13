<?php

$continents= array(
	"Europe" => array ("Canis lupus", "Martes"),
	"Asia" => array ("Ursus arctos", "Ailuropoda melanoleuca"),
	"Africa" => array ("Panthera leo", "Rhinocerotidae"),
	"Australia" => array ("Macropus", "Phascolarctos cinereus"),
	"NorthAmerica" => array ("Canis latrans", "Hyaenidae"),
	"South America" => array ("Cingulata", "Myrmecophagidae"),
	"Antarctica" => array ("Ursus maritimus", "Spheniscidae"),
	);

	foreach ($continents as $key => $value) {
		$cont=$key;
		foreach ($value as $animal) {
			$a=str_word_count($animal, 1);
			$b=count($a);
			/*echo "<pre>";
			print_r($a);
			echo "</pre>";
			echo "<pre>";
			print_r($b);
			echo "</pre>";*/
			if ($b==2) {
				foreach ($a as $v) {
					$new_array[]=$v;					
				}
			}
		}
	}

	/*echo "<pre>";
	print_r($new_array);
	echo "</pre>";*/

	foreach ($new_array as $k => $v) {
		if ($k % 2 !=0)
			$arr2[]=$v;
		else $arr1[]=$v;
	}

	echo "<pre>";
	print_r($arr1);
	echo "</pre>";

	shuffle($arr2);

	echo "<pre>";
	print_r($arr2);
	echo "</pre>";

	foreach ($arr1 as $k => $v) {
		$res[$k]=$v." ".$arr2[$k];
	}

	echo "<pre>";
	print_r($res);
	echo "</pre>";

?>