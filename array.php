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

	$word_count=[];
	$animal=[];
	$full_array=[];

	foreach ($continents as $key => $value) {
		foreach ($value as $animal) {
			$word_count=str_word_count($animal, 1);
			$count=count($word_count);
			if ($count==2) {
				foreach ($word_count as $v) {
					$full_array[]=$v;					
				}
			}
		}
	}

	$odd=[];
	$even=[];

	foreach ($full_array as $key => $value) {
		if ($key % 2 !=0)
			$odd[]=$value;
		else $even[]=$value;
	}

	shuffle($odd);
	shuffle($even);

	echo "<pre>";
	print_r($even);
	echo "</pre>";	

	echo "<pre>";
	print_r($odd);
	echo "</pre>";

	$finish=[];

	foreach ($even as $key => $value) {
		$finish[$key]=$value." ".$odd[$key];
	}

	echo "<pre>";
	print_r($finish);
	echo "</pre>";

?>