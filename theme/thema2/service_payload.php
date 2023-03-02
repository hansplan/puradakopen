<html lang="ko"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0">
<!--
<link rel="stylesheet" type="text/css" href="../css/mobile_main.css"/>
<link rel="stylesheet" type="text/css" href="../css/mobile_sub.css"/>
-->
<style>
	.table_body{background:white; width:100%; height:100%;_visibility:hidden;}
	.service_payload{letter-spacing: -1px;font-family:"Noto Sans KR", sans-serif !important; color:#333;}
	.service_payload .title_desc{font-weight:600;font-size:18px;}
	.service_payload .title{font-weight:600;color:#333;font-size:1.5em;}

	.font_gold{color:#ad7d12 !important}

	.img_box{display: flex;margin-top:40px;margin-bottom:40px;width:100%;}
	.img_box .item{margin-right:40px;}
	.img_box .item img{max-width: 100%;}
	.img_box .item:last-child{margin-right:0px;}

	.table_text{font-weight:500;color:black;font-size:16px;letter-spacing:-0.5px;margin-right:10px;}

	/*중간테이블*/
	.sub3_6td{padding:30px;}

	.sub3_6_t{width: 100%; font-size:1em; text-align:center;}
	.sub3_6_t thead{background:linear-gradient(45deg, #90827c, #414042);border-bottom:0;}
	.sub3_6_t th{text-align:center;line-height:1em;padding:0.7em; }
	.sub3_6_t td{padding: 5px 2px; letter-spacing: 0;}

	.sub3_6cn_list2{margin-bottom:12px;}
	
	table {}
	/* table thead{border-bottom:2px solid #000;} */
	thead th{color:white;vertical-align:middle;}
	.table>thead>tr>th{vertical-align:middle;border-bottom:0;font-weight: 400;font-size: 18px;}
	
	tbody th td{text-align:center; letter-spacing:-0.5px;color:#333;}
	.cate {width:300px;}
	.divide td{border-top:2px solid #bbb !important;}
	.table-hover>tbody>tr.pointing{background:#efefef; color:black;font-weight:500;border-bottom:1px solid black}
	.red{color:red;}
	.table-hover>tbody>tr:hover{background:#333;color:white;}
	.table-hover>tbody>tr:hover td{color:white !important;}
	.table_body h6{font-size:0.8em;}
	
	table tbody tr:nth-child(2n + 1){background:white;}

	#price_table td{color:#333;font-weight:500;border-right:1px solid #ccc;vertical-align:middle !important}
	#price_table td:last-child{border-right:none}
	#price_table td.red{color:red;}

	#price_table .summary{background:linear-gradient(45deg,#fdfbe6,#e4f2f3);border-bottom:1px solid black;}
	#price_table .summary:hover{background:linear-gradient(45deg,#eae7c3,#d2f1f3);color:black}
	#price_table .summary:hover td{color:black !important;}

	#price_table .table4{vertical-align: middle;border-left:1px solid #ccc;}

	.close_btn{width: 40px;
		height: 40px;
		display: block;
		position: absolute;
		right: 20px;
		top: 20px;
		font-size:40px;
		line-height:40px;
		cursor: pointer;
	}
	.price{min-width:150px;vertical-align:middle}
	#price_table td.point{font-weight:700;color:black;background:url('<?=G5_THEME_URL?>/img/landing/new/table_marker.png') left top no-repeat;}
	
</style>



<div class="table_body service_payload">
	<div class="sub3_6cn">
		<div class="sub3_6td">
				<p class="title_desc font_gold">33㎡ 매장 기준 </p>
				<p class="title">가맹점 분담금</p>

				<div class='close_btn'><i class="fa-solid fa-xmark"></i></div>
				<div class="img_box">
					<div class='item'><img src="<?=G5_THEME_URL?>/img/landing/new/cal_pop_01.png"/></div>

					<div class='item'><img src="<?=G5_THEME_URL?>/img/landing/new/cal_pop_02.png"/></div>

					<div class='item'><img src="<?=G5_THEME_URL?>/img/landing/new/cal_pop_03.png"/></div>
				</div>

				<p class="text-right table_text">※ ※ 33㎡(약10평) 이하 기준, 단위 : 원/부가세 별도</p>

				<table summary="구분,제공시간,비고" class="sub3_6_t table  table-hover" id='price_table'>
				<caption>
					서비스 비용
				</caption>
				<thead>
				<tr>
					<th rowspan="1" scope="col">구분</th>
					<th rowspan="1" scope="col">금액</th>
					<th rowspan="1" scope="col">비고</th>
				</tr>
				</thead>
				
				<tbody>
				<tr>
					<td class="cate">주방설비</td>
					<td class='price'> 11,640,000원 </td>
					<td class="t6_bgG"> 45박스 냉장2대,냉장 작업대,냉장 트롤리,튀김,정제기 등 일체 </td>
				</tr>

				<tr>
					<td class="cate">오븐기</td>
					<td class='price'> 17,000,000원 </td>
					<td class="t6_bgG">  라치오날 ICP 101 모델<br>(자동세척 기능,자동 조리시간 조절 기능)  </td>
				</tr>

				<tr >
					<td >POS 일체</td>
					<td class='price'> 1,400,000원 </td>
					<td class="t6_bgG">  듀얼 모니터,금전함,배달용 카드 단말기 1대 포함  </td>
				</tr>

				<tr >
					<td class="cate">주방 및 홀 집기</td>
					<td class='price'> 1,200,000원 </td>
					<td class="t6_bgG">  그릇 및 주방용품 일체    </td>
				</tr>
				
				<tr class="total summary" >
					<td class="cate">합계</td>
					<td class='point'> 31,240,000원 </td>
					<td class="t6_bgG">-</td>
				</tr>
				
				</tbody>
			</table>
		</div>

		<div class="sub3_6td">
				<p class="title_desc font_gold">33㎡ 매장 기준 </p>
				<p class="title">교육비/가맹비/감리비</p>

				<p class="text-right table_text">※ 33㎡(약10평) 이하 기준, 단위 : 원/부가세 별도</p>

				<table summary="구분,제공시간,비고" class="sub3_6_t table  table-hover" id='price_table'>
				<thead>
				<tr>
					<th rowspan="1" scope="col">구분</th>
					<th rowspan="1" scope="col">금액</th>
					<th rowspan="1" scope="col">비고</th>
				</tr>
				</thead>
				
				<tbody>
				<tr>
					<td class="cate">가맹비</td>
					<td class='price'> 5,500,000원 </td>
					<td class="t6_bgG"> 푸라닭 브랜드 사용료, 최초 발생 후 비용 없음 <br>(로열티, 계약이행 보증금 없음) </td>
				</tr>

				<tr>
					<td class="cate">교육비</td>
					<td class='price'> 2,200,000원 </td>
					<td class="t6_bgG">  신규 교육 시만 해당, 본사 조리 및 매뉴얼교육 </td>
				</tr>

				<tr >
					<td >수도권(서울/경기) 지역 감리비</td>
					<td class='price'> 2,200,000원 </td>
					<td rowspan="4" class="table4">   33㎡(약10평) 초과시 3.3㎡(약1평)당 <span class='mdbr'>금 오만원(￦50,000) <부가세별도>을 추가로 부담하여야 하며 </span>본사 인테리어 협력업체 이용 시 감리비 면제</td>
				</tr>

				<tr >
					<td class="cate">충청도 및 강원도(영서) 지역 감리비</td>
					<td class='price'> 3,300,000원 </td>
					
				</tr>

				<tr >
					<td class="cate">전라도, 경상도 및 강원도(영동) <br>지역 감리비</td>
					<td class='price'> 4,400,000원 </td>
					
				</tr>
				
				<tr >
					<td class="cate">제주도 지역 감리비</td>
					<td class='point'> 5,500,000원 </td>
					
				</tr>

				
				</tbody>
			</table>
			<h6 style='color:#333;font-weight:600;font-size:15px;'><img src="<?=G5_THEME_URL?>/img/landing/new/check.png"/> 신규 오픈시 중고 장비 및 사입 금지</h6>
		</div>

	</div>
</div>
	
</body>
</html>
