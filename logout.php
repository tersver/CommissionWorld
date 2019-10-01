<?php
	session_start();
	session_unset();
	echo "<script>alert('로그아웃이 완료되었습니다');
	history.back();</script>";

?>
<meta http-equiv='refresh' content='0;url=index.html'>

