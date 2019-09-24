<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commission world</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/register.css"/>
    
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
        		<span>사용자 님</span>
        	</div>
			<ul>
				<li><a href="director_list.html"><p>그림 외주</p></a></li>
				<li><a href="director_list.html"><p>그림 커미션</p></a></li>
				<li><a href="director_list.html"><p>글 외주</p></a></li>
				<li><a href="director_list.html"><p>글 커미션</p></a></li>
				<li><a href="#Software"><p>자주 묻는 질문</p></a></li>
				<li><a href="#Service"><p>문의</p></a></li>
			</ul>
		</div>
        <form method="post" action="registercheck.php">
		  <div class="container">
		    <h1>회원가입</h1>
		    <h2>아래 정보를 입력해주세요.</h2>
		    <hr>

		    <label for="user_id"><b>ID</b></label>
		    <input type="text" placeholder="ID를 입력하세요!" name="user_id" required>

		    <label for="user_pw"><b>비밀번호</b></label>
		    <input type="password" placeholder="비밀번호를 입력하세요!" name="user_pw" required>

		    <label for="user_pw-repeat"><b>비밀번호 확인</b></label>
		    <input type="password" placeholder="비밀번호를 다시 입력하세요!" name="user_pw-repeat" required>
		    
		    <label for="user_name"><b>이름</b></label>
		    <input type="text" placeholder="이름을 입력하세요!" name="user_name" required>
		    
		    <label for="user_birth"><b>생년월일</b></label>
		    <input type="text" placeholder="예)2000/08/08" name="user_birth" required>
		    
		    <label for="user_tel"><b>전화번호</b></label>
		    <input type="text" placeholder="예)010-1234-5678" name="user_tel" required>
		    
		    <button type="submit" class="registerbtn">회원가입</button>
		  </div>
		</form>
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
    <div id="id01" class="modal">
	  <form class="modal-content animate" action="/login.php">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="images/raye.jpg" alt="Avatar" class="avatar">
	    </div>

	    <div class="container">
	      <label for="uname"><b>Username</b></label>
	      <input type="text" placeholder="Enter Username" name="uname" required>

	      <label for="psw"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>
	        
	      <button type="submit">Login</button>
	      <label>
	        <input type="checkbox" checked="checked" name="remember"> Remember me
	      </label>
	    </div>

	    <div class="container" style="background-color:#f1f1f1">
	      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	      <span class="psw">Forgot <a href="#">password?</a></span>
	    </div>
	  </form>
	</div>
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