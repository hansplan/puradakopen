
<? 
	//echo latest('pic_basic', 'poster', 6, 24,2);
	
   $sql = " select * from g5_write_poster where wr_is_comment = 0 order by wr_subject limit 0, 8 ";
   $result = sql_query($sql);

	 for ($i=0; $row = sql_fetch_array($result); $i++) {
			$imgcontent = $row['wr_content'];
			preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $imgcontent, $imgsrc[$i]);
			
	 }

	
?>




<section id="main_brand_poster" class="main_brand_poster">
     <div class="container">
         
			<article class="text-center">
				<h1><span class="t_orange">디자인을 판매</span>하는 브랜드</h1>
				<h5>푸라닭은 그저 물건을 파는 브랜드가 아닌 디자인, 즉 푸라닭의 이미지를 판매합니다.<br>푸라닭의 차별화된 디자인은 고객에게 푸라닭의 가치를 전달합니다.</h5>
			</article>
			
			 <div class="row">
			   <div class="posterCard col-md-4 col-sm-6 col-xs-12"> 
				<!--<img src="<?php echo G5_THEME_URL; ?>/img/landing/brand_poster_01.png" alt="">-->
				
					<?=$imgsrc[0][0]?>
				
			   </div>

			   <div class="posterCard col-md-4 col-sm-6 col-xs-12"> 
				<?=$imgsrc[1][0]?>
			   </div>

			   <div class="posterCard col-md-4 col-sm-6 col-xs-12"> 
				<?=$imgsrc[6][0]?>
			   </div>
			
              
			   <div class="posterCard col-md-4 col-sm-6 col-xs-12">  
				<?=$imgsrc[3][0]?>
			   </div>

			     <div class="posterCard col-md-4 col-sm-6 col-xs-12">  
				<?=$imgsrc[7][0]?>
			   </div>

			    <div class="posterCard col-md-4 col-sm-6 col-xs-12"> 
				<?=$imgsrc[5][0]?>
			   </div>

          </div>
     </div>
</section>


<section id="main_brand_system" class="main_brand_system">
     <div class="container">
          <div class="row">
			
			<article>

			<div class="col-xs-12 system"> 
			<h3>오븐-후라이드 조리법</h3>
			<dt class="en_title">OVEN FRIDE CHICKEN</dt>
			<dd>푸라닭 치킨의 오븐 후라이드 조리법은 굽는(ROAST)방식의 오븐구이와 기름에 튀겨 바삭한 <br>식감을 주는 후라이드 방식을 조합하여 오랜 기간 연구한 3세대 치킨 조리법입니다.</dd>
			
			<img src="<?php echo G5_THEME_URL; ?>/img/landing/new/brand_system_01.png" alt="">
			</div>
			

<div class="back_box">
			<div class="col-xs-12 system " > 
			<h3>첨단 도계 시스템 및 HACCP인증</h3>
			<dt class="en_title">CLEAN SYSTEM</dt>
			<dd>푸라닭의 모든 치킨은 첨단 도계 시스템을 갖춘 HACCP인증 <br>도계장에서 위생적으로 생산하고 콜드체인시스템(CCS)으로 유통되어 더욱 신선합니다.</dd>
			<div class="text-center" > <img src="<?php echo G5_THEME_URL; ?>/img/landing/new/brand_system_02.png" alt=""></div>
			</div>
</div>
	

			
			<div class="col-xs-12 system"> 
			<h3>고객님이 먼저 알아보는 고품격 치킨</h3>
			
			<div class="img_3"><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/brand_system_03.png" alt=""></div>

			<dt class="en_title mt30">FRESH MEAT</dt>
			<dd>신선한 닭고기는 고객님이 먼저 느낍니다. 푸라닭은 100% 국내산 닭고기만을 사용합니다.</dd>

			<dt class="en_title mt30">WELL-MADE CHICKEN</dt>
			<dd>오븐 후라이드 조리법과 푸라닭만의 특제소스로 탄생한 푸라닭의 치킨 요리는 <br>차원이 다른 바삭함과 촉촉함을 선사하며, 특별하고 새로운 맛의 경험을 제공합니다.</dd>

			<dt class="en_title mt30">SPECIAL PACKAGE DESIGN</dt>
			<dd>푸라닭 만의 특별한 포장 패키지에 담아 제공됩니다.</dd>
			
			</div>

			 </article>

          </div>
     </div>
</section>


<section id="main_step_system" class="main_step_system_new">
     <div class="container">
          <div class="row">
			
			<article>
			<h1 class="text-center title">푸라닭 치킨은 다릅니다.</h1>

			<div class="col-sm-4 col-xs-12 item"> 
				<div class='con img'><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/system_01.png" alt=""></div>
				<div class='con'><dt>로열티가 없다</dt><dd>매월 본사에 납부하는<br>로열티가 없습니다. </dd></div>
			</div>

			<div class="col-sm-4 col-xs-12 item"> 
				<div class='con img'><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/system_02.png" alt=""></div>
				<div class='con'><dt>보증금도 없다</dt><dd>미리 본사에 일정 비용을 납부하고<br>되돌려 받는 보증금 또한 없습니다. </dd></div>
			</div>

			<div class="col-sm-4 col-xs-12 item"> 
				<div class='con img'><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/system_03.png" alt=""></div>
				<div class='con'><dt>주 6일 배송 시스템</dt><dd>철저한 관리 시스템으로 안전한 주6일 배송<br>(도서산간 지역은 주 3회 배송)</dd></div>
			</div>

			<div class="col-sm-4 col-xs-12 item"> 
				<div class='con img'><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/system_04.png" alt=""></div>
				<div class='con'><dt>후불입금제도</dt><dd>가맹점 운영에 필요한 원ㆍ부재료를<br>먼저 받아 영업을 하고 이후 대금을<br>입금하는 제도입니다. </dd></div>
			</div>

			<div class="col-sm-4 col-xs-12 item"> 
				<div class='con img'><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/system_05.png" alt=""></div>
				<div class='con'><dt style='letter-spacing:-1px;'>원료육(계육) 연중 고정가 공급</dt><dd>가맹점의 안정적 손익관리를 위해<br>변동 없이 연중 고정 금액으로<br>원료육을 공급합니다.</dd></div>
			</div>

			<div class="col-sm-4 col-xs-12 item"> 
				<div class='con img'><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/system_06.png" alt=""></div>
				<div class='con'><dt>계약구역의 입점제한</dt><dd>기입점 구역의<br>추가 입점을 제한합니다.</dd></div>
			</div>

			</article>
			
          </div>
     </div>
</section>


<section id="main_stepend" class="main_stepend">
     <div class="container">
	 	<h1 class="text-left">지속적인 매장 운영 관리</h1>
	 	<h4>푸라닭 치킨의 전문 슈퍼바이저가 성공 창업 및 지속적인 매장 관리를 지원합니다.</h4>

        <div class="row mt40">
			<div class="col-sm-4 col-xs-12 item"><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/main_stepend_01.png"></div>
			<div class="col-sm-4 col-xs-12 item"><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/main_stepend_02.png"></div>
			<div class="col-sm-4 col-xs-12 item"><img src="<?php echo G5_THEME_URL; ?>/img/landing/new/main_stepend_03.png"></div>
		</div>

		<article>
			<h5 class="desc_1">가맹본부 소속 가맹점 관리자, 현장 방문을 통한 전반적인 가맹점 운영 컨설팅</h5>
			<h5 class="desc_2">가맹점 전반적인 운영 항목 점검 및 교육 진행 (매뉴얼 점검, 접객 서비스, 위생 관리)</h5>
		</article>

     </div>
</section>

<style>

#main_brand_poster{
	padding:100px 0 120px;
	color:#fff;
}

#main_brand_poster h1{
	margin-bottom:20px;
}

#main_brand_poster h5{
	line-height:32px;
	letter-spacing:-1px;
}

#main_brand_poster article{
	margin-bottom:60px;
}

#main_brand_poster .posterCard{
	margin-bottom:30px;
}

.back_box ::before{
content: "";
position: absolute;
top: 0;
bottom: 0;
left: -9999px;
right: -9999px;
z-index:-999999;
background-color: #fafafa;
}

#main_brand_system{
	padding:80px 0; 
	color:#555;
}
#main_brand_system h3{
	font-weight:600;
	color:black;
}
#main_brand_system .en_title{
	font-family:"Noto Sans KR", sans-serif;
	font-weight:600;
	font-size:1.2em;
}
#main_brand_system article h1{
	margin-bottom:60px;
}
#main_brand_system article dt{
	letter-spacing:-0.5px;
	margin:15px 0 10px;
}
#main_brand_system .system{
	padding-top:30px;
}

#main_brand_system .img_3{
	margin:40px 0;
}


#main_step_system{
	padding:3% 0 6%;
	color:white;
}

#main_step_system .title{
	margin:40px 0;
}

#main_step_system .item{
	margin:40px 0;
	padding-left:0;
	padding-right:0;
}

#main_step_system article div{
	float:left;
	display:inline-block;
	min-height:80px;
}
#main_step_system .con{float:left;vertical-align:middle}
#main_step_system .con.img{padding:10px 0;}
#main_step_system dt,#main_step_system dd{width:100%;padding-left:10px;}
#main_step_system dt{line-height:30px;font-size:1.2em}
#main_step_system dt::after{background:url('<?php echo G5_THEME_URL; ?>/img/landing/new/check.png'); content:""; display:inline-block;width:22px;height:24px;margin-left:8px;vertical-align: sub;}
#main_step_system dd{margin-top:5px;line-height:20px;font-size:0.9em;}



#main_stepend{
	color:#555;
	padding:6% 0;
}
#main_stepend .item{margin:30px 0;}
#main_stepend .item img{max-width:100%;}
#main_stepend article{margin-top:50px;}
#main_stepend .desc_1::before{content:"";background:url('<?php echo G5_THEME_URL; ?>/img/landing/new/svtit.png');width:50px;height:27px;display:inline-block;vertical-align: middle;margin-right:15px;}
#main_stepend .desc_2::before{content:"";background:url('<?php echo G5_THEME_URL; ?>/img/landing/new/qscvtit.png');width:86px;height:27px;display:inline-block;vertical-align: middle;margin-right:15px;}

#main_brand_poster .posterCard img{
	width:355px;
	height:495px;
}

/* main- brand Responsible*/

@media screen and (max-width: 1680px) {

}

@media screen and (max-width: 1200px) {
	#main_brand_poster .posterCard{
		text-align:center;
	}
	#main_brand_poster .posterCard img{
		
	}
	#main_step_system .br{
		display:inline;
	}
	#main_brand_system img{max-width:100%;}
	#main_step_system .item{display: grid;}
}

@media screen and (max-width: 993px) {
	#main_brand_system {background-repeat:repeat;}
	#main_brand_system .system{
		padding:5% 5%;
	}
	#main_brand_system .system img{
		width:100%;
	}
	#main_step_system dt{
		font-size:1em;
		line-height:1em;
		margin:1% 0 1%;
	}
	#main_step_system dd{
		font-size:0.8em;
	}
}

@media screen and (max-width: 767px){
	/* #main_step_system .con{width:100%;}*/
	#main_step_system .con.img{margin-left:10%} 
	#main_step_system .item{display: inline-block;}
	#main_stepend h1{font-size:2em;letter-spacing: -1px;}
	#main_stepend h5{font-size:0.8em;}
	#main_stepend .item{text-align:center}
}

@media screen and (max-width: 736px) {
	#main_step_system .title{font-size:2em;}
}

@media (max-width: 414px) {
	
}

@media (max-width: 650px) {

}

@media (max-width: 768px) {
	
}
</style>




