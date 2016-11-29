<?php
	$konek=mysql_connect("localhost", "root", "");
	$sambung=mysql_select_db("dimulse", $konek);
	if($sambung){
		//echo "oke";
	}
	else{
		echo "error karena = ".mysql_error();
	}
?>