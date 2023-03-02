<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if($w != 'u'){
	$wr_4 = $sido1." ".$gugun1;
	$wr_5 = "$path[0]|$path[1]|$path[2]|$path[3]|$path[4]|$path[5]|$path[6]|$path[7]|$path[8]|$path[9]|$path[10]|$path[11]|$path[12]|$path[13]";
	sql_query(" update $write_table set wr_4 = '$wr_4',wr_5 = '$wr_5' where wr_id = '$wr_id' ");
}else{
$wr_7 = $wr_7;
	sql_query(" update $write_table set wr_7 = '$wr_7'  where  wr_id = '{$wr_id}' ");
}
?>