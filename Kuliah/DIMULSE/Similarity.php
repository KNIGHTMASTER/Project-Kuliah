<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Similarity($query){
    $resn = mysql_query("SELECT Count(*) as n FROM tbvektor");
    $rown = mysql_fetch_array($resn);
    $n = $rown['n'];
    
    //terapkan preprocessing terhadap $query
    $aquery = explode(" ", $query);    
    $panjangQuery = 0;
    $aBobotQuery = array();
    
    for($a = 0; $a<count($aquery); $a++){
        $resNTerm = mysql_query("SELECT Count(*) as N FROM tbindex WHERE Term = '$aquery[$i]'");
        $rowNTerm = mysql_fetch_array($resNTerm);
        $NTerm = $rowNTerm['N'];
        $idf = log($n/$NTerm);
        //simpan di array
        $aBobotQuery[] = $idf;
        $panjangQuery = $panjangQuery + $idf * $idf;        
    }
    $panjangQuery = sqrt($panjangQuery);
    $jumlahmirip = 0;
    //ambil setiap term dari DocId, bandingkan dengan Query
    $resDocId = mysql_query("SELECT * FROM tbvektor ORDER BY DocId");
    while ($rowDocId = mysql_fetch_array($resDocId)) {
        $dotproduct = 0;
        $docId = $rowDocId['DocId'];
        $panjangDocId = $rowDocId['Panjang'];
        $resTerm = mysql_query("SELECT * FROM tbindex WHERE DocId = $docId");
        while ($rowTerm = mysql_fetch_array($resTerm)) {
            for ($i=0; $i<count($aquery); $i++) {
                //jika term sama
                if ($rowTerm['Term'] == $aquery[$i]) {
                    $dotproduct = $dotproduct + $rowTerm['Bobot'] * $aBobotQuery[$i];                    
                }
            }
        }
        if ($dotproduct > 0) {
            $sim = $dotproduct / ($panjangQuery * $panjangDocId);
            //simpan kemiripan > 0	ke dalam tbcache
            $resInsertCache = mysql_query("INSERT INTO tbcache (Query, DocId, Value) VALUES ('$query', $docId, $sim)"); 
            $jumlahmirip++;
        }
    }
    if ($jumlahmirip == 0) {
        $resInsertCache = mysql_query("INSERT INTO tbcache (Query, DocId, Value) VALUES ('$query', 0, 0)");
    }
}
?>
