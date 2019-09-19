<?php
	session_start();
	$username="사용자";
	if(isset($_SESSION['user_name'])){
		$username=$_SESSION['user_name'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commission world</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
    <div class="wrap">
        <header class="header">
            <div class="header__column">
                <i class="fas fa-user" onclick="document.getElementById('id01').style.display='block'"></i>         
            </div>
            <div class="header__column">
                <a href="index.html"><img src="images/logo.jpg" alt="" class="logo"></a>
            </div>
            <div class="header__column">
				<a class="menu_icon" href="#">
	                <i class="fas fa-bars"></i>
	            </a>
			</div>
        </header>
        <div class="menu_list wrapper3">
        	<div class="info">
        		<i class="fas fa-user"></i>
        		<span><?=$username?> 님</span>
        	</div>
			<ul>
				<li><a href="director_list.html"><p>그림 외주</p></a></li>
				<li><a href="director_list.html"><p>그림 커미션</p></a></li>
				<li><a href="director_list.html"><p>글 외주</p></a></li>
				<li><a href="director_list.html"><p>글 커미션</p></a></li>
				<li><a href="#Software"><p>자주 묻는 질문</p></a></li>
				<li><a href="#Service"><p>문의</p></a></li>
				<?php
					if(isset($_SESSION['user_name'])){
				?>
				<li><a href="logout.php"><p>로그아웃</p></a></li>
				<?php
					}
				?>
			</ul>
		</div>
        <div class="contents">
            <section>
                <img class="logo" src="images/commissionworldmain.jpg" />
            </section>
            <section class="director">
                <h2 class="director__title title">인기작가
                    <i class="fas fa-star" style="color:gold"></i>
                </h2>
                <div class="sub_kv">
                        <img src="images/raye.jpg" width=0 height=0 />
                        <img src="images/dlddld.jpg" width=0 height=0 />
                        <img src="images/alaal.jpg" width=0 height=0 />
                        <img src="https://www.maggiesadler.com/wp-content/uploads/2015/10/10617007_939025979457209_6938406_n.jpg" width=0 height=0/>
                        <img src="https://www.maggiesadler.com/wp-content/uploads/2015/10/1168617_1435408473368301_409182770_n.jpg" width=0 height=0/>
                        <img src="https://www.maggiesadler.com/wp-content/uploads/2015/10/11189836_754178218029431_2102772742_n.jpg" width=0 height=0/>
                        <img src="https://www.maggiesadler.com/wp-content/uploads/2015/10/10843869_1658219887738208_2033326788_n.jpg" width=0 height=0/>
                        <img src="https://www.maggiesadler.com/wp-content/uploads/2015/10/1515054_1379051609022475_1394148610_n.jpg" width=0 height=0/>
                </div>
            </section>
            <section class="after">
                <h2 class="after__title title">후기</h2>
                <div class="after__contents">
                	<div>
	                    <h3 class="after__name">어항/라예작가님</h3>
	                    <p class="after__desc">
	                            작업속도도 빠르고 좋았어요!
	                    </p>
	                </div>
	                <div>
	                    <h3 class="after__name">아항/밍밍작가님</h3>
	                    <p class="after__desc_last">
	                            캐릭터가 귀여워요~
	                    </p>
	                </div>
                </div>
            </section>
            <section class="notation">
                <h2 class="notation__title">공지</h2>        
                <ul>
                    <li>기능추가 업데이트1</li>
                    <li>기능추가 업데이트2</li>
                    <li>기능추가 업데이트3</li>
                    <li>기능추가 업데이트4</li>
                </ul>
            </section>
        </div>
        <footer class="footer">
            <p>회사 email:<a href="mailto:comi1128@naver.com"><span>comi1128@naver.com</span></a></p>
            <p>문의 | 결제내역 | 자주묻는질문 | 이용약관</p>
            <p>대표자:송민성 | 대표전화:010-3766-3475</p>
            <p>Copyrightⓒ. 2019. Commission World. ALl rights reserved.</p>
        </footer>
        <section>
            <img class="advertisement" src="images/banner.jpg" />
        </section>
        <!--
        <center>
        	<embed height="200" width="90%" src="http://www.gagalive.kr/livechat1.swf?chatroom=~~~new_CommissionWorld"></embed>
        </center>
        -->
    </div>
    <?php

    	if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])){	
    ?>
		<div id="id01" class="modal">
	  <form class="modal-content animate" method="post" action="login.php">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="images/raye.jpg" alt="Avatar" class="avatar">
	    </div>

	    <div class="container">
	      <label for="uname"><b>ID</b></label>
	      <input type="text" placeholder="ID를 입력하세요!" name="user_id" required>

	      <label for="psw"><b>비밀번호</b></label>
	      <input type="password" placeholder="비밀번호를 입력하세요!" name="user_pw" required>
	        
	      <button type="submit">로그인</button>
	    </div>

	    <div class="container" style="background-color:#f1f1f1">
	      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">취소</button>
	      <button type="button" onclick="location.href='register.html'" class="cancelbtn">회원가입</button>
	    </div>
	  </form>
	</div>
	<?php
		}
		else{
		
	?>
	<div id="id01" class="modal">
	  <form class="modal-content animate" action="login.php">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="images/raye.jpg" alt="Avatar" class="avatar">
	    </div>

	    <div class="container">
	      <label for="uname"><b>안녕하세요! <?=$_SESSION['user_name']?>님</b></label>
	    </div>
	  </form>
	</div>
	
	<?php	
		}
	?>
	<script type="text/javascript">
		var h2s = document.getElementsByClassName('menu_icon');
		var query = "h2s[0].addEventListener('click', function(){changevisible();}, false)";
		eval(query);
		function changevisible(){
			var wrappers=document.getElementsByClassName('menu_list');
			if (wrappers[0].className=="menu_list wrapper2"){
				wrappers[0].className="menu_list wrapper3";
			}
			// 여기 target wrapper3이 원래 1이었음
			else if(wrappers[0].className=="menu_list wrapper3"){
				wrappers[0].className="menu_list wrapper2";
			}
		}
	</script>    
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
</body>
</html>