
<? 
	//echo latest('pic_basic', 'poster', 6, 24,2);
	
   $sql = " select * from g5_write_poster where wr_is_comment = 0 order by wr_subject limit 0, 8 ";
   $result = sql_query($sql);

	 for ($i=0; $row = sql_fetch_array($result); $i++) {
			$imgcontent = $row['wr_content'];
			preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $imgcontent, $imgsrc[$i]);
			
	 }

	
?>

<section id="main-sales_shop_list" class="main-sales_shop_list">
    <div class="container">
		<div class='row'>
			<article class="to-animate col-xs-12 sales_shop_list_title text-center">
				<img src="<?=G5_THEME_URL?>/img/new/5/5_shop_prized.png" alt="2023년 1월 매출 TOP5매장"/>
			</article>

			<div class='to-animate col-xs-6 shop_list'>
				<img src="<?=G5_THEME_URL?>/img/new/5/5_shop_list.png" alt=""/>
			</div>

			<div class='to-animate col-xs-6 shop_img'>
				<img src="<?=G5_THEME_URL?>/img/new/5/5_shop_front_img.png" alt="" title="푸라닭 치킨 매장 이미지"/>
			</div>

		</div>
    </div>
</section>



<section id="main-menu_showup" class="main-menu_showup">
    <div class="container">

		<div class='row'>

			<article class="to-animate screenimg col-xs-12 menu_showup_menu ">
				<img class="" src="<?=G5_THEME_URL?>/img/new/6/main_6_menu_full.png" alt="푸라닭:프리미엄메뉴 라인업"/>
			</article>

			<article class="to-animate screenimg col-xs-12 menu_showup_predict ">
				<img class="" src="<?=G5_THEME_URL?>/img/new/6/main_6_predict.png" alt="2023년 출시임박!"/>
			</article>

		</div>
    </div>
</section>



<section id="main-prizetitle" class="main-prizetitle">
     <div class="container">
          <div class="row">
				<div class='col-xs-12'><img src="<?php echo G5_THEME_URL; ?>/img/new/7/main_7_banner_size.png" alt="한국프랜차이즈대상 국무총리표창 5년 연속수상" title="한국프랜차이즈대상 국무총리표창 5년 연속수상"></div>
          </div>
     </div>
</section>




<!-- 
<section id="main_brand_poster" class="main_brand_poster">
     <div class="container">
         
			<article class="text-center">
				<h1><span class="t_orange">디자인을 판매</span>하는 브랜드</h1>
				<h5>푸라닭은 그저 물건을 파는 브랜드가 아닌 디자인, 즉 푸라닭의 이미지를 판매합니다.<br>푸라닭의 차별화된 디자인은 고객에게 푸라닭의 가치를 전달합니다.</h5>
			</article>
			
			 <div class="row">
			   <div class="posterCard col-md-4 col-sm-6 col-xs-12"> 
				
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
</section> -->

