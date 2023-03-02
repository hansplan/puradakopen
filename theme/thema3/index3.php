<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

?>


<?
	$_SESSION['cts']="ok"; //임의세션생성
?>

<script src="https://kit.fontawesome.com/5ae2835c3a.js" crossorigin="anonymous"></script>

<!-- POP Section -->
<style>
	.popbtn,.requestbtn{cursor:pointer;}
</style>

<section id="pop_pay">
	<?include_once(G5_THEME_PATH.'/service_payload.php');?>
</section>



<!-- Home Section -->


<section id="home" class="main-visual">
    
	 <!--<div class="overlay fadeout"></div>-->
     <!--<div id="particles-js"></div>-->

     <div class="container" >
          <div class="row">
               <article class="col-md-6 col-xs-7 col-12">
			   		
					<h2 class="to-animate">푸라닭 치킨은 철저한 시장조사와 수많은 연구를 통해 만들어낸 브랜드입니다.</h2>
					<h4 class="to-animate">치킨에서 보기 힘든 "요리와 같은 치킨" 퀄리티뿐 아니라 전문화된 디자인으로 보는 맛을 더했습니다.</h4>
					<h4 class="to-animate">치킨, 요리가 되다. 푸라닭 치킨 푸라닭의 밝은 미래와 함께할 가맹점 사장님을 응원합니다.</h4>

                    <a href="javascript:moveTo('#main_request');" class="smoothScroll btn btn10"><span>가맹문의</span> <div class="transition"></div></a>
					<a class="smoothScroll btn popbtn btn10"><span>가맹비용</span> <div class="transition"></div></a>
               </article>
          </div>
     </div>
</section>



<!-- Blog Section -->


<?php
include_once(G5_THEME_PATH.'/main2/main.php');
include_once(G5_THEME_PATH.'/main2/main_design_brand.php');
include_once(G5_THEME_PATH.'/main2/main_banner_menu.php');
?>


<script type="text/javascript">
function checkFrm(obj) {


 if(obj.wr_6.checked == false) {
  alert('개인정보 수집 동의에 체크해주세요.',0);
  obj.wr_6.focus();
  return false;
 }

 
	if (!jQuery('#g-recaptcha-response').val()) {
		alert('자동등록방지에 체크해주세요.',0);
		jQuery('#g-recaptcha-response').focus();
		return false;
	}


}
</script>



<section id="main_request" class="main_request">
     <div class="container">
          <div class="row">
			
	
			<div class="main_introduce_title">
				<h3 class="text-center">가맹문의</h3>
			</div>

			<div class="main_contact">
				<form action="<?=G5_BBS_URL?>/write_update.php" class="" id="reservation_form" method="post" onsubmit="return checkFrm(this);">
				<input type='hidden' name='bo_table' value="reservation">
				<input type='hidden' name='token' value='<?php echo get_write_token("reservation"); ?>'>
				<input type='hidden' name='wr_subject' value='<?=date("Y-m-d H:i:s",time()); ?>'>
				<input type='hidden' name="wr_content" value="상담 문의가 접수되었습니다.">
				<input type='hidden' name="wr_name" value="이름"  placeholder="이름">
				<input type='hidden' name="wr_7" value="1" >
				
					<fieldset class="col-xs-12"> 
						<div class="col-md-25 col-sm-6 col-xs-12 text-in">
							<label for="" class="hide">이름(필수)</label>
							<input type="text" value="" name="wr_1" placeholder="이름(필수)"  required>
						</div>

						<div class="col-md-25 col-sm-6 col-xs-12 text-in">
							<label for="" class="hide">연락처(필수)</label>
							<input type="text" value="" name="wr_2" placeholder="연락처(필수)"  required>
						</div>

						<div class="col-md-25 col-sm-12 col-xs-12 text-in">
							<label for="" class="hide">창업예산(선택)</label>
							<input type="text" value="" name="wr_3" placeholder="창업예산(선택)">
						</div>
						



						<div class="contact_form text-in">
							<div class="col-md-25 col-sm-6 select_sido">
								<label for="sido1" class="text-right forD" >희망지역
									<span class="sub_label">(선택)</span>
								</label>

								<select class="Address_D col-xs-6 custom-select" id="sido1" title="전체" name="sido1" ></select>
							</div>

							<div class="col-md-25 col-sm-6 col-xs-6">
								<label for="gugun1" class="hide" class="sound_only">세부지역(시/구/군)</label>
								<select class="Address_S custom-select" id="gugun1" title="선택하세요" name='gugun1'></select>
							</div>
						</div>
						
							<script type="text/javascript">
							$('document').ready(function() {
							 var area0 = ["시/도 선택","서울특별시","인천광역시","대전광역시","광주광역시","대구광역시","울산광역시","부산광역시","경기도","강원도","충청북도","충청남도","전라북도","전라남도","경상북도","경상남도","제주도","세종특별자치시",];
							  var area1 = ["강남구","강동구","강북구","강서구","관악구","광진구","구로구","금천구","노원구","도봉구","동대문구","동작구","마포구","서대문구","서초구","성동구","성북구","송파구","양천구","영등포구","용산구","은평구","종로구","중구","중랑구"];
							   var area2 = ["계양구","남구","남동구","동구","부평구","서구","연수구","중구","강화군","옹진군"];
							   var area3 = ["대덕구","동구","서구","유성구","중구"];
							   var area4 = ["광산구","남구","동구",     "북구","서구"];
							   var area5 = ["남구","달서구","동구","북구","서구","수성구","중구","달성군"];
							   var area6 = ["남구","동구","북구","중구","울주군"];
							   var area7 = ["강서구","금정구","남구","동구","동래구","부산진구","북구","사상구","사하구","서구","수영구","연제구","영도구","중구","해운대구","기장군"];
							   var area8 = ["고양시","과천시","광명시","광주시","구리시","군포시","김포시","남양주시","동두천시","부천시","성남시","수원시","시흥시","안산시","안성시","안양시","양주시","오산시","용인시","의왕시","의정부시","이천시","파주시","평택시","포천시","하남시","화성시","가평군","양평군","여주군","연천군"];
							   var area9 = ["강릉시","동해시","삼척시","속초시","원주시","춘천시","태백시","고성군","양구군","양양군","영월군","인제군","정선군","철원군","평창군","홍천군","화천군","횡성군"];
							   var area10 = ["제천시","청주시","충주시","괴산군","단양군","보은군","영동군","옥천군","음성군","증평군","진천군","청원군"];
							   var area11 = ["계룡시","공주시","논산시","보령시","서산시","아산시","천안시","금산군","당진시","부여군","서천군","예산군","청양군","태안군","홍성군"];
							   var area12 = ["군산시","김제시","남원시","익산시","전주시","정읍시","고창군","무주군","부안군","순창군","완주군","임실군","장수군","진안군"];
							   var area13 = ["광양시","나주시","목포시","순천시","여수시","강진군","고흥군","곡성군","구례군","담양군","무안군","보성군","신안군","영광군","영암군","완도군","장성군","장흥군","진도군","함평군","해남군","화순군"];
							   var area14 = ["경산시","경주시","구미시","김천시","문경시","상주시","안동시","영주시","영천시","포항시","고령군","군위군","봉화군","성주군","영덕군","영양군","예천군","울릉군","울진군","의성군","청도군","청송군","칠곡군"];
							   var area15 = ["거제시","김해시","마산시","밀양시","사천시","양산시","진주시","진해시","창원시","통영시","거창군","고성군","남해군","산청군","의령군","창녕군","하동군","함안군","함양군","합천군"];
							   var area16 = ["서귀포시","제주시","남제주군","북제주군"];
							   

							 

							 // 시/도 선택 박스 초기화

							 $("select[name^=sido]").each(function() {
							  $selsido = $(this);
							  $.each(eval(area0), function() {
							   $selsido.append("<option value='"+this+"'>"+this+"</option>");
							  });
							  $('#gugun1').append("<option value=''>구/군 선택</option>");
							 });

							 

							 // 시/도 선택시 구/군 설정

							 $("select[name^=sido]").change(function() {
							  var area = "area"+$("option",$(this)).index($("option:selected",$(this))); // 선택지역의 구군 Array
							  var $gugun =  $('#gugun1'); // 선택영역 군구 객체
							  $("option",$gugun).remove(); // 구군 초기화

							  if(area == "area0")
							   $gugun.append("<option value=''>구/군 선택</option>");
							  else {
							   $.each(eval(area), function() {
								$gugun.append("<option value='"+this+"'>"+this+"</option>");
							   });
							  }
							 });


							});
							</script>


						<div class="col-xs-12 container">

							<div class="col-xs-12 select_container">

								<div class="col-md-3 text-box_con" style="display:table;padding:0;" >
									<div class="text-center text_box">
										푸라닭 창업을 <span class="mbr">생각하게 된 계기 <span> <br><span style="color:#aaa;font-size:0.9em">(복수선택가능)</span>
									</div>
								</div>

								<div class="col-md-3 box_container">
									<div class="select_box">
									<h6 class="text-center">온라인</h6>
										<input type="checkbox" id="o1" name="path[0]" title="블로그 및 카페"/>
								     <label for="o1"><span>네이버 블로그 또는 창업 카페</span></label>

									 	 <input type="checkbox" id="o2" name="path[1]" title="네이버/다음 등 주요 포털 검색"/>
								     <label for="o2"><span>네이버 검색</span></label>

									 	 <input type="checkbox" id="o3" name="path[2]" title="페이스북,인스타그램"/>
								     <label for="o3"><span>다음검색</span></label>

									 	 <input type="checkbox" id="o4" name="path[3]" title="유튜브, 카카오 플러스 친구"/>
								     <label for="o4"><span>인터넷 배너 광고</span></label>

									 <input type="checkbox" id="o5" name="path[4]" title="유튜브, 카카오 플러스 친구"/>
								     <label for="o5"><span>페이스북, 인스타그램</span></label>

									 <input type="checkbox" id="o6" name="path[5]" title="유튜브, 카카오 플러스 친구"/>
								     <label for="o6"><span>유튜브</span></label>


									 <input type="checkbox" id="o7" name="path[6]" title="유튜브, 카카오 플러스 친구"/>
								     <label for="o7"><span>카카오 플러스 친구</span></label>
									 </div>
								</div>

								<div class="col-md-3 box_container">
									<div class="select_box">
									<h6 class="text-center">오프라인</h6>
									 	 <input type="checkbox" id="o8" name="path[7]"  title="TV,라디오,신문광고"/>
								     <label for="o8"><span>TV,라디오 광고</span></label>

									 	 <input type="checkbox" id="o9" name="path[8]"  title="전단지,창업박람회,매장방문"/>
								     <label for="o9"><span>신문 광고</span></label>

									 <input type="checkbox" id="o10" name="path[9]"  title="전단지,창업박람회,매장방문"/>
								     <label for="o10"><span>창업박람회</span></label>


									 <input type="checkbox" id="o11" name="path[10]"  title="전단지,창업박람회,매장방문"/>
								     <label for="o11"><span>매장 방문</span></label>


									 <input type="checkbox" id="o12" name="path[11]"  title="전단지,창업박람회,매장방문"/>
								     <label for="o12"><span>지인 소개</span></label>


									<input type="checkbox" id="o13" name="path[12]"  title="전단지,창업박람회,매장방문"/>
								     <label for="o13"><span>창업컨설턴트</span></label>

									 </div>
								</div>

								<div class="col-md-3 box_container">
								<div class="select_box">
									<h6 class="text-center">지인 소개</h6>
										<input type="checkbox" id="o14" name="path[13]" title="기타(직접입력)"/>
								     <label for="o14"><span>기타 (재상담고객)</span></label>
								
									<!--<textarea name="path[7]" id="" class="contact_txt"  placeholder="내용" style=""></textarea>-->
								</div>
								</div>

							</div>
						</div>

						<section class="contact_agree text-center">
							<div class="col-xs-12 container">
								
								<input type="checkbox" id="agree" name="wr_6" value="동의" />
								<label for="agree"><span>개인정보 수집동의</span></label> 
								<a class="btn btn-success agree_btn"> 내용확인</a>
						
								<div id="agreement_con" >
									 <div class="agreement_txt">
										<iframe src="<?php echo G5_THEME_URL; ?>/agreement.php" frameborder="0" width="100%" height="300" marginwidth="0" marginheight="0" scrolling="yes" ></iframe>
									</div>
								</div>
								
							</div>
						 </section>
							
						<div class="g-recaptcha" data-sitekey="6Lcaa4cUAAAAAP4PkZmgv_i-eWldfD9i8F0FLXVc"></div>

						<div class="col-xs-12" style="margin-top:30px;">
							<div class="row text-center"><button class="contact_btn">문의하기</button></div>
						</div>

					</fieldset>
				</form>
			</div>

          </div>
     </div>
</section>





<div id="quickmenu" class="quickmenu1" style="" onclick="moveTo('#main_request');">
	<img src="<?php echo G5_THEME_URL; ?>/img/landing/quick_bar.png?ver=1">
</div>


<style>


.main-visual {
   background: url('<?php echo G5_THEME_URL; ?>/img/landing/main_wide_0623.jpg') no-repeat;
   background-position:30% top !important; 
   height: 93vh;
   top:20px;
   font-weight:900;
}
.main-visual .container article{
	padding:10px 10px 10px 15px;
	background:rgba(91,73,49,0.4);
}

@media (max-width: 768px) {
	
	.main-visual .container{}
}



/* main- brand Responsible*/
#quickmenu{right:30px;top:273px;position:absolute;width:120px;}

#agreement_con{
	display:none;
}

.agreement_txt{
	border:1px solid #fff;
	min-height:300px;
	background:#fff;
	overflow:auto;
}

#main_request{
	padding:30px 0;
	background:#222;
	color:white;
}

#main_request .main_introduce_title{margin:30px 0;}


.contact_btn{
	padding:0 112px;
	background:#7b685a;
	border:0;
	border-radius:0;
	color:white;
	box-shadow:none;
	font-size:20px;
}


#main_request .container{
	padding:0 10px; 
	margin-top:10px;
	color:white;
}

#main_request .select_container{
	
	border:1px solid rgba(255,255,255,0.3);
	padding:30px 10px;
}

#main_request .select_box{
	background:#393939;
	padding:10px;
	line-height:20px;
}

#main_request .box_container{
	padding:0 10px;
	height: 100%;
}

#main_request .select_box h6{
	font-size:0.9em;
	padding-bottom:10px;
	border-bottom:1px solid rgba(255,255,255,0.5)
}

#main_request .select_box label{
	clear:both;
	display:block;
	font-size:0.8em;
	color:white;
	padding-top:0;
		padding-bottom:0;

}

.white{color:white !important}

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
	#main_request .select_box label{
			margin-top:3px;
				margin-bottom:3px;
	}
}

#main_request .select_sido{
	text-align:right;

}

#main_request .contact_agree{
	clear:both;
	padding:20px 0 ;
	display: flex;
}

#main_request .contact_form:after{
	clear:both;
}

#main_request .select_sido label.forD{
	color:white;
	display:inline-block;
	vertical-align:middle;
	margin-right:3%;
	line-height:15px;
	margin-bottom:0;
	padding-top:10px;
	float:left;
}

#pop_pay{display:none;}

#main_request .placeholer{
	color:#000;
}

#main_request  .main_contact .text_box{
		display:table-cell;vertical-align:middle;
	}

.g-recaptcha{margin:0 auto;text-align:center;display:block;width:304px;}


@media screen and (min-width: 994px){
	#main_request  .main_contact .col-md-25{
		width:20%;
		min-height:50px;
		padding:10px;
		display:inline-block;
		float:left;
	}

	#main_request  .main_contact .select_sido{
		padding-right:0;
	}

	#main_request  .main_contact .col-md-50{
		width:50%;
		min-height:50px;
	}

	#main_request  .main_contact .col-md-5{
		width:40%;
	}

	#main_request .text_box, #main_request .select_box{
		height:340px;
	}
	
}



@media screen and (min-width: 1201px){
	
	#main_request .Address_D{
		width:70%;display:inline-block;
	}
	#main_request .Address_D.col-xs-6{width:70%}
	#main_request .sub_label{font-size:0.5em;line-height:15px;display:block;}

	#main_request .text_box, #main_request .select_box{
		height:340px;
	}
	#pop_pay{display:none;width:1200px}

	
}


@media screen and (max-width: 1680px) {
	
}

@media screen and (max-width: 1200px) {
	#main_request .select_sido label.forD{
		position:relative;margin-top:-30px; 
	}

	
}

@media screen and (max-width: 993px) {
	
	#main_request .text-in{margin-top:20px;}
	#main_request .contact_form{clear:both;margin-top:40px;float:left;width:100%;}
	#main_request .contact_form .forD{float:left;}
	#main_request  .main_contact .col-md-25.select_box{
		height:auto;
	}
	#main_request .select_sido label.forD{clear:both;position:relative;width:100%;text-align:left;}
	#main_request .container .text-box_con{width:100%;}
	
	#quickmenu{top:100px;right:10px;}
}

@media screen and (min-width: 767px){
	#main_request .Address_D{
		width:100%;
	}
	
	
	.main-visual .container{
		position:absolute;
		top:130px;
		left:4%;
	}
}

@media screen and (min-width: 1800px){
	.main-visual{height:93.5vh;background-position:30% 10% !important;}
	.main-visual .container{left:10vw}
}

@media screen and (max-width: 736px) {
	#pop_pay {width:100%;font-size:small;}
	#pop_pay .cate{width:auto;}
	footer address{padding:10px;font-size:0.8em;}
}

@media (max-width: 414px) {
	#banner_btn .banner{
		background-size:26% !important;
		padding:5% 3% 5% 40%;
		height:115px;
	}
	.main-visual{height:88vh }
	#banner_btn .banner dt{font-size:1.2em}
	#banner_btn .banner dd{font-size:0.8em}
	
}

@media (max-width: 650px) {
	
}

@media (max-width: 768px) {
	#quickmenu{display:none;}
	.main-visual{background-position:45% bottom !important;height:91vh }
	.main-visual .container{}
	.col-12{width:100%;margin-top:30%;}
}
</style>


<script>

	function moveTo(target){
	$( document ).ready( function() {
		var jbOffset = $(target).offset();	

			//console.log(jbOffset['top']);
		$('html, body').animate({scrollTop: jbOffset['top']}, 300);
		}
	)};
</script>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>