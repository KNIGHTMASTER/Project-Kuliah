<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function cekKamus($kata){
	// cari di database	
	$sql = "SELECT * from tbkatadasar where KataDasar ='$kata' LIMIT 1";
	//echo $sql.'<br/>';
	$result = mysql_query($sql) or die(mysql_error());  
	if(mysql_num_rows($result)==1){
		return true; // True jika ada
	}else{
		return false; // jika tidak ada FALSE
	}
}
?>
