<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>
<style>
.row_container{
	margin:0;padding:0;
    display: block;
	position:absolute;
	width: 100%;
    height: 100vh;
	background:rgba(0,0,0,0.8);
}

.row_container:after{
	content: "";
	background:#000 url('/theme/thema2/img/landing/main_wide.jpg') no-repeat;
	background-position:15% top !important;
	opacity:0.5;
	filter: alpha(opacity=60);
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	position: absolute;
	z-index: -1;   
}

.mbskin{
	margin-top:30vh;
}

#mb_login{
	background:#1a1a1a ;
	border:1px solid rgba(255,255,255,0.4);
}
#mb_login h1{
}
#mb_login #login_info{
	background:rgba(255,255,255,0.1)
}
a{
	color:white;
}

#mb_login #login_fs .btn_submit{border-radius:0;background:#7b685a;border:0;color:white;line-height:40px;padding:30px auto;height:50px;box-shadow:none;}
</style>

<section class="row_container">
<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <h1> 관리자 <?php echo $g5['title'] ?></h1>

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">

    <fieldset id="login_fs">
        <legend>회원로그인</legend>
        <label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
        <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
        <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" style="font-family:'맑은 고딕',Malgun Gothic, serif" maxLength="20" placeholder="비밀번호">
        <input type="submit" value="로그인" class="btn_submit">
		<!--
        <input type="checkbox" name="auto_login" id="login_auto_login">
        <label for="login_auto_login">자동로그인</label>
		-->
    </fieldset>

    <?php
    // 소셜로그인 사용시 소셜로그인 버튼
    @include_once(get_social_skin_path().'/social_login.skin.php');
    ?>
	
	<!--
    <aside id="login_info">
        <h2>회원로그인 안내</h2>
        <div>
            <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">아이디 비밀번호 찾기</a>
            <a href="./register.php">회원 가입</a>
        </div>
    </aside>
	-->
    </form>


</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->
</div>