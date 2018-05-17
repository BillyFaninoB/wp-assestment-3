<?php 
remove_action('assesment_3_after_render', '');
add_action('assesment_3_after_render', 'new_action');

function new_action(){
	echo "silahkan pilih timezone anda";
}

add_filter('assesment_3_timezones','add_timezone',1);

function add_timezone($arr){
	$add = [
		"utm0" => "UTC-0",
		"utm0.5" => "UTC-0.5",
		"utm0.75" => "UTC-0.75",
	];
	$add2 = [
		"utp2" => "UTP-2",
		"utp3" => "UTP-3",
		"utp4" => "UTP-4",
	];
	// $arr[] = $add;
	$arr = array_merge($add,$arr);
	$arr = array_merge($arr,$add2);

	return $arr;
}

?>