<?php
include_once('./_common.php');
?>

<?
if($_SESSION['cts']=="ok"){ //세션 유/무체크
?>

<!-- 다음 전환페이지 설정 -->
 <script type="text/javascript"> 
 //<![CDATA[ 
 var DaumConversionDctSv="type=W,orderID=,amount="; 
 var DaumConversionAccountID="QCinX-9t6ueFwBqJ1pev-g00"; 
 if(typeof DaumConversionScriptLoaded=="undefined"&&location.protocol!="file:"){ 
 	var DaumConversionScriptLoaded=true; 
 	document.write(unescape("%3Cscript%20type%3D%22text/javas"+"cript%22%20src%3D%22"+(location.protocol=="https:"?"https":"http")+"%3A//t1.daumcdn.net/cssjs/common/cts/vr200/dcts.js%22%3E%3C/script%3E")); 
 } 
 //]]> 
 </script> 


<!-- 네이버 전환페이지 설정 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script> 
<script type="text/javascript"> 
var _nasa={};
_nasa["cnv"] = wcs.cnv("4","10"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
//console.log("end");
</script>



<!-- WIDERPLANET PURCHASE SCRIPT START 2019.1.25 -->
<div id="wp_tg_cts" style="display:none;"></div>

<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
	return {
		wp_hcuid:"",  		     /*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
					      *주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
		ti:"44328",            	     /*광고주 코드 */
		ty:"PurchaseComplete",       /*트래킹태그 타입 */
		device:"<? if(is_mobile() >0 ){ echo 'mobile'; }else{echo 'web';}?>",                /*디바이스 종류  (web 또는  mobile)*/
		items:[{i:"비용상담 ",	     /*전환 식별 코드  (한글 , 영어 , 번호 , 공백 허용 )*/
			t:"비용상담 ",         /*전환명  (한글 , 영어 , 번호 , 공백 허용 )*/
			p:"1",		     /*전환가격  (전환 가격이 없을경우 1로 설정 )*/
			q:"1"		     /*전환수량  (전환 수량이 고정적으로 1개 이하일 경우 1로 설정 )*/
		}]
	};
}));

</script>

<?
$_SESSION['cts']=""; //세션초기화 (중복실행방지)
complete(); 
}
?> 

<script type="text/javascript" src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET PURCHASE SCRIPT END 2019.1.25 -->

<?
	function complete(){
		alert(' 가맹문의가 접수되었습니다. \n 담당자 확인후 빠르게 연락드리겟습니다.',0);
		goto_url('http://puradakopen.com');
	}
?>