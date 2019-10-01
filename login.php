<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
include 'functions.php';
$functions=new Functions();
$checkresult = $functions->login($user_id,$user_pw);
if($checkresult){
	session_start();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['user_name'] = $checkresult;
	echo "<script>alert('로그인이 완료되었습니다');
	history.back();</script>";
	exit;
}
else{
	echo "<script>alert('ID 또는 Password가 틀립니다.');</script>";

	
}


?>
<meta http-equiv='refresh' content='0;url=index.html'>

