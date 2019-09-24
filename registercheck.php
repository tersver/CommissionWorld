<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$user_pw_repeat = $_POST['user_pw_repeat'];
$user_name = $_POST['user_name'];
$user_birth = $_POST['user_birth'];
$user_tel = $_POST['user_tel'];
echo "<p>안녕하세요. $user_name($user_id)님</p>";
echo "<p><a href='logout.php'>로그아웃</a></p>";
include 'functions.php';
$functions=new Functions();
$checkresult = $functions->matchID($user_id);
if($checkresult){
	echo "<script>alert('이미 존재하는 회원입니다.');history.back();</script>";
	exit;
}
else{
	$query = "INSERT INTO members(member_id, member_pw, member_name, member_birth, member_tel) values('$user_id', '$user_pw', '$user_name', '$user_birth', '$user_tel')";
	mysql_query($query);
	echo "<script>alert('회원가입이 완료되었습니다.');</script>";
	echo '<script type="text/javascript">
		location.href="index.php";
	</script>';
	exit;
	
}
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $members[$user_id]['name'];

