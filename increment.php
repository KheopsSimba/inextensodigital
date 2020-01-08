<?php

function increment($tab){
	$result = array();
	$flag = false;
	for($i=count($tab)-1;$i >=0;$i--){
		$digit = $tab[$i];
		if($flag){
			$result[$i] = $digit;
		}elseif($digit == 9){
			$result[$i] = 0;
		}else{
			$digit++;
			$result[$i] = $digit;
			$flag = true;
		}
	}
	if($result[0] == 0){
		array_unshift($result, 1);
	}
	return $result;
}
