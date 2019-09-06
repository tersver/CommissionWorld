<?php
	class functions{
		private $db;
		function __construct()
        {
            # You can change mysql username or password
            
            $db_server = mysql_connect("localhost", "tersver", "op45225633"); 
			if(!$db_server) die ("Unable to connect to MySQL :" . mysql_error());
			mysql_select_db("tersver") or die("Unable to select Database : " . mysql_error());

            //$regsqli = new mysqli("localhost", "imyeonn", "c12345678", "imyeonn");
			//mysql_set_charset("euckr",$regsqli);
			//$regsqli->set_charset("utf8");
			mysql_set_charset("utf8",$db_server);
            mysql_query("set session character_set_connection=utf8;");
			mysql_query("set session character_set_results=utf8;");
			mysql_query("set session character_set_client=utf8;");
        }


		public function matchID($id){
			$query1 = "SELECT distinct member_id,member_pw,member_name from members";
			$result1= mysql_query($query1);
			var_dump($result1);
            $rows1 = mysql_num_rows($result1);
            var_dump($rows1);
            for($i=0;$i<$rows1;$i++){
            	var_dump($i);
            	$db_id = mysql_result($result1, $i, 'member_id');
            	var_dump($id);
            	var_dump($db_id);
            	if($id==$db_id){
            		return true;
            	}
            }
            return false;
		}
		
		public function searchAuthor($query){
			$query1 = "SELECT distinct author_name, profile_pic from picture where author_category='$query'";
			$result1= mysql_query($query1);
            $rows1 = mysql_num_rows($result1);
            $wholearray = array();
            for($i=0;$i<$rows1;$i++){
            	$author_name = mysql_result($result1, $i, 'author_name');
            	$profile_pic = mysql_result($result1, $i, 'profile_pic');
            	array_push($wholearray,array($author_name, $picpath));
            }
            return $wholearray;
		}
		public function searchPicture($query){
			$query1 = "SELECT distinct pic_category, pic_path from picture where author_name='$query'";
			$result1= mysql_query($query1);
            $rows1 = mysql_num_rows($result1);
            $wholearray = array();
            for($i=0;$i<$rows1;$i++){
            	$pic_path = mysql_result($result1, $i, 'pic_path');
            	array_push($wholearray,$picpath);
            }
            return $wholearray;
		}
	}
	
	

?>