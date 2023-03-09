<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>



<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- Navigation section  -->

<!-- <div class="navbar navbar-default navbar-fixed-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="<? echo G5_URL ?>" class="navbar-brand"></a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right " >
					
					<?php
					$sql = " select *
								from {$g5['menu_table']}
								where me_use = '1'
								  and length(me_code) = '2'
								order by me_order, me_id ";
					$result = sql_query($sql, false);
					$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
	
					for ($i=0; $row=sql_fetch_array($result); $i++) {
					?>
                    <li>
						
						<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" ><?php echo $row['me_name'] ?></a>
					</li>
					<?}?>


               </ul>
          </div>

	</div>
</div> -->



<style>
.navbar-brand {
	background: url('<?php echo G5_THEME_URL; ?>/img/landing/top_bi.svg') no-repeat left top;
	background-size:cover;
	width:320px;
	height:55px;
	padding:0;
}

@media (max-width: 414px) {
	.navbar-brand{max-width:320px;
	width:75%;
	margin-left:5px;}
}


</style>



<!-- Home Section -->