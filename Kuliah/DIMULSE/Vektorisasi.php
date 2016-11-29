<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Vektorisasi(){
    mysql_query("truncate tbvektor");
    $resDocId = mysql_query("SELECT DISTINCT DocId FROM tbindex");
    $num_rows = mysql_num_rows($resDocId);
    echo 'Terdapat = '.$num_rows." dokumen yang dihutung panjang vektornya <br />";
    while ($row = mysql_fetch_array($resDocId)) {
        $docId = $row['DocId'];
        $resVektor = mysql_query("SELECT Bobot FROM tbindex WHERE DocId = $docId");
        //jumlahkan semua bobot kuadrat
        $panjangVektor = 0;
        while($rowVektor = mysql_fetch_array($resVektor)) {
            $panjangVektor = $panjangVektor + $rowVektor['Bobot']*	$rowVektor['Bobot'];
        }
        $panjangVektor = sqrt($panjangVektor);	
        $resInsertVektor = mysql_query("INSERT INTO tbvektor (DocId, Panjang) VALUES ($docId, $panjangVektor)");
    }
}
?>
