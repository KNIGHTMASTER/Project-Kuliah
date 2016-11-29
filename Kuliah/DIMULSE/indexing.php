<?php
include 'stopListRemoval.php';
include 'tokenisasi.php';
include 'stemmingECS.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function indexing(){
    mysql_query("TRUNCATE tbindex");
    $resberita = mysql_query("SELECT * FROM tbberita order by Id");
    if($resberita){
        echo "oke";
    }
    else{
        echo "salah resberita";
    }
    $numrow = mysql_num_rows($resberita);
    echo 'indexing sebanyak = '.$numrow." berita <br />";
    while ($row = mysql_fetch_array($resberita)) {
        $docId = $row['Id'];
        //echo "doc id = ".$docId."<br />";        
        $berita = $row['Berita'];
        //echo "berita = ".$berita."<br />";
        
        $berita = token($berita);
        //echo "token berita = ".$berita."<br />";
        $berita = stRemove($berita);
        //echo "st remove berita = ".$berita."<br />";
        $berita = Enhanced_CS($berita);
        //echo "ecs berita = ".$berita."<br />";
        
        $aberita = explode(" ", trim($berita));               
        
        foreach ($aberita as $key => $value) {
            //echo "<br />aberita = ".$aberita[$key]."<br />";
            $rescount = mysql_query("SELECT Count FROM tbindex WHERE Term = '$aberita[$key]' AND DocId = $docId");
            
            $numrow= mysql_num_rows($rescount);
                if ($numrow > 0) {
                    $rowcount = mysql_fetch_array($rescount);
                    $count = $rowcount['Count'];
                    $count++;
                    mysql_query("UPDATE tbindex SET Count = $count WHERE Term = '$aberita[$key]' AND DocId = $docId");
                }
            mysql_query("INSERT INTO tbindex (Term, DocId, Count) VALUES ('$aberita[$key]',$docId, 1)");
        }
    }    
}
?>
