
<? 
	//echo latest('pic_basic', 'poster', 6, 24,2);
	
   $sql = " select * from g5_write_poster where wr_is_comment = 0 order by wr_subject limit 0, 6 ";
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
				<?=$imgsrc[2][0]?>
			   </div>
			
              
			   <div class="posterCard col-md-4 col-sm-6 col-xs-12">  
				<?=$imgsrc[3][0]?>
			   </div>

			     <div class="posterCard col-md-4 col-sm-6 col-xs-12">  
				<?=$imgsrc[4][0]?>
			   </div>

			    <div class="posterCard col-md-4 col-sm-6 col-xs-12"> 
				<?=$imgsrc[5][0]?>
			   </div>

          </div>
     </div>
</section>

<script language="JavaScript">

</script>

<section id="main_brand_system" class="main_brand_system">
     <div class="container">
          <div class="row">
			
			<article>
				<h1 class="text-center">3세대 조리방식인 <span class="t_orange">오븐후라이드</span> 치킨 브랜드</h1>
			
			<div class="col-md-4 system"> 
			<img src="<?php echo G5_THEME_URL; ?>/img/landing/brand_system_01.png" alt="">
			<dt class="t_orange">OVEN FRIED CHICKEN</dt>
			<dd>오븐후라이드는 오븐구이와 후라이드 방식을 조합하여 만든 푸라닭만의 신개념 조리법 입니다.</dd>
			</div>
			
			<div class="col-md-4 system"> 
			<img src="<?php echo G5_THEME_URL; ?>/img/landing/brand_system_02.png" alt="">
			<dt class="t_orange">CLEAN SYSTEM</dt>
			<dd>첨단도계시스템을 갖추고 있는 HACCP인증 도계장에서 위생적으로 생산하고 콜드체인-시스템(CSS)으로 유통되어 더욱 신선합니다.</dd>
			</div>
			
			<div class="col-md-4 system"> 
			<img src="<?php echo G5_THEME_URL; ?>/img/landing/brand_system_03.png" alt="">
			<dt class="t_orange">FRESH MEAT</dt>
			<dd>푸라닭은 100% 국내산 신선육을 사용합니다.</dd>
			</div>
             
			 </article>

          </div>
     </div>
</section>


<section id="main_step_system" class="main_step_system">
     <div class="container">
          <div class="row">
			
			<article>
				<h1 class="text-center">푸라닭의 매장 <span class="mbr">지원 시스템<span></h1>

			
			<div class="col-md-3 col-xs-6"> 

				<img src="<?php echo G5_THEME_URL; ?>/img/landing/main_step_system_01.png" alt="">
				<span class="num"> 01</span> 
				<dt>전국 주 6회 <span class="br">가맹점 배송 시스템</span></dt>
				<dd>전국의 물류센터를 이용하여 가맹점에 <span class="br">주6회 신선한 원료육을 공급합니다.</span></dd>

			</div>

			<div class="col-md-3 col-xs-6"> 

				<img src="<?php echo G5_THEME_URL; ?>/img/landing/main_step_system_02.png" alt="">
				<span class="num"> 02</span> 
				<dt>누구나 쉽게 조리할 수 있는 <span class="br">ONE PACK SYSTEM</span></dt>
				<dd>치킨을 절각 후 염지까지 완료하여 팩으로 <span class="br">공급하는 시스템으로 조리시간을 </span><span class="br">단축합니다.</span></dd>

			</div>

			<div class="col-md-3  col-xs-6"> 

				<img src="<?php echo G5_THEME_URL; ?>/img/landing/main_step_system_03.png" alt="">
				<span class="num"> 03</span> 
				<dt>마케팅 및 홍보지원</dt>
				<dd>신규 가맹점 개설시 <span class="br">홍보비 지원(약 400만원 상당), </span><span class="br">SNS 홍보 및 온라인 마케팅 지원</span></dd>

			</div>
			
			<div class="col-md-3  col-xs-6"> 

				<img src="<?php echo G5_THEME_URL; ?>/img/landing/main_step_system_04.png" alt="">
				<span class="num"> 04</span> 
				<dt>창업대출</dt>
				<dd>본사 주거래 은행 연계 대출 지원</dd>


			</div>
			</article>
              
          </div>
     </div>
</section>


<section id="main_stepend" class="main_stepend">
     <div class="container">
          <div class="row">
			 <h1 class="text-center">매장 인큐베이팅 시스템</h1>

		  <div class="col-md-5 brand_left text-left"> 
			<ul>
				<li> 
					<dt class="t_yellow">푸라닭 SV(슈퍼바이져)</dt>
					<dd>매월 정기방문.<br> 가맹점의 전반적 운영을 도우며 본사와 가맹점의 중간 역할</dd>
				</li>

				<li> 
					<dt class="t_ocean">푸라닭 QSC(서비스관리자)</dt>
					<dd>월 1회방문. 가맹점의 전반적인 서비스, 조리, 메뉴사항 점검 및 교육진행</dd>
				</li>

				<li> 
					<dt class="t_red">푸라닭 SSV</dt>
					<dd>지역 관리자 지역의 판촉 및 매출상승을 위한 활동 전개</dd>
				</li>
			</ul>

			</article>
			</div>


			<div class="col-md-7 brand_right text-right">
					<img src="<?php echo G5_THEME_URL; ?>/img/landing/main_stepend_img.png" width="100%"alt="">
			</div>

          </div>
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



#main_brand_system{
	padding:100px 0; 
	color:#555;
}

#main_brand_system .col-md-4{
	
}

#main_brand_system article h1{
	margin-bottom:60px;
}
#main_brand_system article dt{
	font-size:1.2em;
	letter-spacing:-0.5px;
	margin:20px 0 5px;
}


#main_step_system{
	padding:7% 0 6%;
	color:white;
}

#main_step_system article{
	text-align:center
}

#main_step_system h1{
	margin-bottom:5%;
}

#main_step_system .num{
	display:block;
	font-weight:900;
	font-size:1.3em;
}

#main_step_system dt{
	font-size:1.2em;
	margin:5% 0;
}
#main_step_system dd{
	font-size:0.9em;
}

#main_step_system .br{
	display:block;
}
#main_step_system .col-md-3{
	margin-bottom:50px;
}


#main_stepend{
	color:#555;
	padding:6% 0;
}

#main_stepend ul li {
	margin-top:8%;
}

#main_stepend ul li dt{
	font-size:1.3em;
}

#main_stepend h1{
	margin-bottom:5%;
}

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
		font-size:1.2em;
		line-height:1.2em
		margin:1% 0 1%;
	}
	#main_step_system dd{
		font-size:0.8em;
	}
}

@media screen and (max-width: 767px){

}

@media screen and (max-width: 736px) {

}

@media (max-width: 414px) {
	
}

@media (max-width: 650px) {

}

@media (max-width: 768px) {
	
}
</style>




