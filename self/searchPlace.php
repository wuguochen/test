<?php
set_time_limit(0);
include('./getPlace.php');


$allData = getAllData($placeInfo);
//print_r( $allData );

//未能找到的酒店
function unfindPlace( $allData,$placeInfo ){
	$allPlaceIds = array_column($allData,'place_id');
	//$searchPlaceIds = array_keys( $placeInfo );
	$searchPlaceIds =  $placeInfo;
	$unFindPlaceIds = [];
	foreach( $searchPlaceIds as $value ){
		if( !in_array( $value,$allPlaceIds ) ){
			$unFindPlaceIds[] = $value;
		}
	}
	print_r( $unFindPlaceIds );
	echo implode( ',',$unFindPlaceIds );
}


//发送rfp给酒店
function getInsertRfpMapSql($allData){
	$rfp_id		= '';
	$rfp_nu 	= '';
	$demands_id = '';
	$time = time();
	
	$valueStr = '';
	foreach( $allData as $value){
		$invite_id = 118;
		$place_id = $value['place_id'];
		$province_id = $value['province_id'] == '9999' ? $value['city_id'] : $value['province_id'];
		
		$area = getArea($province_id);
		$valueStr .= PHP_EOL."(
			'{$invite_id}',
			'{$value['place_id']}',
			'{$province_id}',
			'{$value['city_id']}',
			'{$value['star_rate']}',
			'{$area}',
			'106'
		),";
	}
	$valueStr = trim($valueStr,',');
	$sql = "insert into yrfp_map(invite_id,place_id,province_id,city_id,star,area,user_id) "
	."values".$valueStr;
	echo $sql;
}
//获取大区
function getArea($province_id){
	$area = array(
        '1' => array('ids' => array(9, 11, 10, 12, 14), 'name' => '华东区'),
        '2' => array('ids' => array(19, 20, 13, 21), 'name' => '华南区'),
        '3' => array('ids' => array(23, 22, 30, 27, 28, 25, 24, 31, 29, 26), 'name' => '华西区'),
        '4' => array('ids' => array(1, 2, 8, 6, 7, 16, 3, 15, 4, 18, 17, 5), 'name' => '华北区')
    );
    
	foreach($area as $key=>$value){
		if( in_array($province_id,$value['ids']) ){
			return $key;
		}
	}
	return false;
    
}

//~ print_r( $allData );
getInsertRfpMapSql( $allData );

//unfindPlace( $allData,$placeInfo );







