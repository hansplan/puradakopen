<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if($w != 'u'){
	$wr_4 = $sido1." ".$gugun1;
	
	for($i=0;$i<13;$i++){
		$reson[$i] = '';
		$reson[$path[0]] = 'on';
	}
	
	$wr_5 = "$reson[0]|$reson[1]|$reson[2]|$reson[3]|$reson[4]|$reson[5]|$reson[6]|$reson[7]|$reson[8]|$reson[9]|$reson[10]|$reson[11]|$reson[12]|$reson[13]";
	sql_query(" update $write_table set wr_4 = '$wr_4',wr_5 = '$wr_5' where wr_id = '$wr_id' ");
}else{
$wr_7 = $wr_7;
	sql_query(" update $write_table set wr_7 = '$wr_7'  where  wr_id = '{$wr_id}' ");
}
?>