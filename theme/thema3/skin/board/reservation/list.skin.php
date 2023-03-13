<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<style>
	tbody tr td{text-align:left;}
	#bo_list .td_date {text-align:left !important;}
	.td_path{word-break:keep-all;}
	.td_path span{padding:1px 10px; border-radius:10px;color:white;margin-right:5px;margin-top:5px;display:inline-block}
	.path1{background:#1dc800;}
	.path2{background:rgb(30, 130, 76);}
	.path3{background:#6534ff}
	.path4{background:rgb(154, 18, 179);}
	.path5{background:rgb(68, 108, 179);}
	.path6{background:#f50528}
	.path7{background:#e6af4b}
	.path8{background:rgb(103, 128, 159);}
	.path9{background:#2879ff}
	.path10{background:#003567}
	.path11{background:#565656}
	.path12{background:#62d4c7}
	.path13{background:#601986}
	.path14{background:#6a3906}

	.result{padding:3px 5px;background:#bbb;color:white;}
	.result.result1{background:#333;}
		.result.result2{background:#ff4081;}
			.result.result3{}
</style>

<?
	function pathway($way){
		$path = explode('|',$way);
		$pathshift = "";

		if($path[0]=='on') { $pathshift.="<span class='path1'>네이버 블로그 또는 창업카페</span>";}
		if($path[1]=='on') { $pathshift.="<span class='path2'>네이버검색</span>";}
		if($path[2]=='on') { $pathshift.="<span class='path3'>다음 검색</span>";}
		if($path[3]=='on') { $pathshift.="<span class='path4'>인터넷 배너 광고</span>";}
		if($path[4]=='on') { $pathshift.="<span class='path5'>페이스북, 인스타그램</span>";}
		if($path[5]=='on') { $pathshift.="<span class='path6'>유튜브</span>";}
		if($path[6]=='on') { $pathshift.="<span class='path7'>카카오 플러스 친구</span>";}
		if($path[7]=='on') { $pathshift.="<span class='path8'>TV 및 라디오 광고</span>";}
		if($path[8]=='on') { $pathshift.="<span class='path9'>신문 광고</span>";}
		if($path[9]=='on') { $pathshift.="<span class='path10'>창업박람회</span>";}
		if($path[10]=='on') { $pathshift.="<span class='path11'>매장 방문</span>";}
		if($path[11]=='on') { $pathshift.="<span class='path12'>지인 소개</span>";}
		if($path[12]=='on') { $pathshift.="<span class='path13'>창업컨설턴트</span>";}
		if($path[13]=='on') { $pathshift.="<span class='path14'>기타(재상담고객)</span>";}

		print_r( $pathshift);
	}

	function status($result){
		
		if($result =='1' || $result == null) { $status_result.="<span class='result result1'>문의접수</span>";}
		if($result=='2') { $status_result.="<span class='result result2'>처리중/보류</span>";}
		if($result=='3') { $status_result.="<span class='result result3'>상담완료</span>";}

		print_r($status_result);
	}
?>

<h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>" >

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div class="bo_fx">
        <div id="bo_list_total">
            <span>&nbsp;&nbsp;&nbsp;&nbsp;Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <!-- <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul> -->
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
            <th scope="col">번호</th>
            <?php if ($is_checkbox) { ?>
            <th scope="col">
                <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
            </th>
            <?php } ?>
            <th scope="col" style='width:15%;'>접수일</th>
			<th scope="col" style='width:10%;'>상담상태</th>
            <th scope="col" style='width:10%;'>이름</th>
            <th scope="col" style='width:10%;'>연락처</th>
            <th scope="col" style='width:10%;' >창업예산(선택)</th>
			<th scope="col" style='width:15%;' >희망지역(선택)</th>
			<th scope="col"  >창업계기</th>
            <th scope="col"  >개인정보동의</th>
            <th scope="col"  >3자제공동의</th>
            <!--<th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜</a></th>-->
            
            <?php if ($is_good) { ?><th scope="col"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천</a></th><?php } ?>
            <?php if ($is_nogood) { ?><th scope="col"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천</a></th><?php } ?>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
            <td class="td_num">
            <?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong>공지</strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>
            <?php if ($is_checkbox) { ?>
            <td class="td_chk">
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            </td>
            <?php } ?>
            <td class="td_subject" >
                <?php
                echo $list[$i]['icon_reply'];
                if ($is_category && $list[$i]['ca_name']) {
                 ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>

                <a href="/adm/bbs/board.php?bo_table=reservation&wr_id=<?=$list[$i]['wr_id']?>">
					
                    <?php echo $list[$i]['subject'] ?>
                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><?php echo $list[$i]['comment_cnt']; ?><span class="sound_only">개</span><?php } ?>
                </a>

                <?php
                // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
                if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
                if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];

                 ?>
            </td>
				
			<td class="td_chk">
               <a href="/adm/bbs/board.php?bo_table=reservation&wr_id=<?=$list[$i]['wr_id']?>"><?php status($list[$i]['wr_7']); ?></a>
            </td>
            <td class="td_name sv_use">  <a href="/adm/bbs/board.php?bo_table=reservation&wr_id=<?=$list[$i]['wr_id']?>"><strong><?php echo $list[$i]['wr_1'] ?></strong></a></td>
            <td class="td_date"><?php echo add_hyphen($list[$i]['wr_2']) ?></td>
            <td class="td_num"><?php echo  $list[$i]['wr_3'] ?></td>
			<td class="td_num"><?php echo $list[$i]['wr_4'] ?></td>
			
			<td class="td_path"><?php pathway($list[$i]['wr_5'])?></td>
            <td class="td_num"><?php echo $list[$i]['wr_6']?></td>
            <td class="td_num"><?php echo $list[$i]['wr_8']?></td>

			<!--
            <td class="td_date"><?php echo $list[$i]['datetime2'] ?></td>
            <?php if ($is_good) { ?><td class="td_num"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
            <?php if ($is_nogood) { ?><td class="td_num"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
			-->
        </tr>
        <?php } ?>

			


        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm" style='padding:0 20px;'>
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" style='display: inline-block; border: 1px solid #ccc; background: #fafafa; text-decoration: none; color:#666' ></li>
            <!-- <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li> -->
			<style>
				.excel_btn{     
					display: inline-block;
					border: 1px solid rgb(30, 130, 76);;
					padding:4px 20px;
					background: #fafafa;
					text-decoration: none;
					color: #666;
				}

				.excel_btn:hover{
					background: #565656;
					border:1px solid #565656;
					color:white;
				}
			</style>
			<li><a class="excel_btn" href="<?php echo G5_ADMIN_URL ?>/excel.board.php?<?php echo $_SERVER['QUERY_STRING'] ?>" class="btn_submit"><i class="material-icons" style="vertical-align:middle;">
attach_file
</i><span style="vertical-align:middle;">전체엑셀다운</span></a></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user" style='padding:0 20px;'>
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01" style='display: inline-block; margin: 0; padding: 10px; border: 1px solid #ccc; background: #fafafa; text-decoration: none;' >목록</a></li><?php } ?>
            <!-- <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02" style='display: inline-block; margin: 0; padding: 10px; border: 1px solid #ccc; background: #fafafa; text-decoration: none;'>글쓰기</a></li><?php } ?> -->
        </ul>
        <?php } ?>
		
    </div>
    <?php } ?>
    </form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages;  ?>

<!-- 게시판 검색 시작 { -->
<fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl" style='border: 1px solid #ccc; height:30px; width:120px;'>
        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
        <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
        <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
        <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
        <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
        <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input" size="15" maxlength="20" style='display: inline-block; margin: 0; padding: 10px; border: 1px solid #ccc; background: #fafafa; text-decoration: none; border: 1px solid #ccc; height:8px; width:120px; background:white;'>
    <input type="submit" value="검색" class="btn_submit" style='display: inline-block; border: 1px solid #ccc; background: #fafafa; text-decoration: none; color:#666; height:30px; width:70px;'>
    </form>
</fieldset>
<!-- } 게시판 검색 끝 -->

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
