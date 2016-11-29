<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Pembobotan(){
    $resn = mysql_query("SELECT DISTINCT DocId FROM tbindex");
    $n = mysql_num_rows($resn);    
    $resBobot = mysql_query("SELECT * FROM tbindex ORDER BY Id");
    $num_rows = mysql_num_rows($resBobot);
    echo 'Terdapat '.$num_rows." term yang diberikan bobot <br />";
    while ($row = mysql_fetch_array($resBobot)) {
        //$w = tf * log (n/N)        
        $term = $row['Term'];
        $tf = $row['Count'];
        $id = $row['Id'];
        
        //berapa jumlah dokumen yang mengandung term itu?, N
        
        $resNTerm = mysql_query("SELECT Count(*) as N FROM tbindex WHERE Term = '$term'");
        $rowNTerm = mysql_fetch_array($resNTerm);
        $NTerm = $rowNTerm['N'];
        
        $w = $tf * log($n/$NTerm);
        
        //update bobot dari term tersebut
	$resUpdateBobot = mysql_query("UPDATE tbindex SET Bobot = $w WHERE Id = $id");        
    }
}
?>
