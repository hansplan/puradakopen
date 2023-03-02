<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

$now = G5_TIME_YMD;

?>

<style>
	a {color:inherit;}
</style>


<!-- Footer Section -->
<!-- 푸터 시작 -->
<footer>
	<div class="footerArea">
		<div class="footer_txt">
			<!--<h2><a href=""><img src="<?php echo G5_THEME_URL; ?>/img/landing/top_logo.png" alt="logo"/></a></h2>-->
			(주)아이더스코리아
			<address>
			
			<?if($now > '2019-11-14'){
				echo "서울시 강서구 양천로 376, 6층(601호), 7층, 8층, 9층(가양동, 델타빌딩) ";
			}?>
			
			&nbsp&nbsp| &nbsp&nbsp대표 장성식 &nbsp&nbsp|&nbsp&nbsp 대표전화 1599-9206 &nbsp&nbsp|&nbsp&nbsp 가맹문의 1668-2921</address>	
		</div>
	</div>

	<div class="footer-copyright">
		<p class="copy"> <a href="/adm">Copyright ⓒ</a> 2018 IDUS KOREA. All RIGHTS RESERVED.</p>
	</div>
</footer>

<!-- 푸터 끝 -->

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up" style="line-height:38px;"></i></a>

<!-- SCRIPTS -->


<script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET  SCRIPT END 2019.1.25 -->

<!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 --> 
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script> 
<script type="text/javascript"> 
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_40b703517127";
if (!_nasa) var _nasa={};
wcs.inflow();
wcs_do(_nasa);
</script>

<!-- WIDERPLANET  SCRIPT START 2019.1.25 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
	return {
		wp_hcuid:"",   /*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
				*주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
		ti:"44328",	/*광고주 코드 */
		ty:"Home",	/*트래킹태그 타입 */
		device:"<? if(is_mobile() >0 ){ echo 'mobile'; }else{echo 'web';}?>"	/*디바이스 종류  (web 또는  mobile)*/
		
	};
}));
</script>

<script src="<?php echo G5_THEME_JS_URL ?>/jquery.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/bootstrap.min.js"></script>

<script src="<?php echo G5_THEME_JS_URL ?>/jquery.bpopup.min.js"></script>
<!--
<script src="<?php echo G5_THEME_JS_URL ?>/particles.min.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/app.js"></script>
-->
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.parallax.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/smoothscroll.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/custom.js"></script>


<script>

	$(document).ready(function() {
	
		$('.popbtn').bind('click', function(e) {
			$('#pop_pay').bPopup();
			$('.table_body').css('visibility','inherit');
		});

		$('.close_btn').on('click',function(){
			$('#pop_pay').bPopup().close();
		});

		$('.requestbtn').bind('click', function(e) {
			moveTo('#main_request');
		});
		
		$('.agree_btn').bind('click', function(e) {
			$('#agreement_con').slideToggle(200);
		});

		$('.nav li').eq(0).bind('click', function(e) {
			moveTo('#main-brand_line');
		});
		$('.nav li').eq(1).bind('click', function(e) {
			moveTo('#main_brand_system');
		});

		$('.nav li').eq(2).bind('click', function(e) {
			moveTo('#main_menu');
		});
	});
</script>





<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>