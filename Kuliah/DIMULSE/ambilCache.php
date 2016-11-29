<?php
include 'Similarity.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function ambilCache($keyword) {
    $limitrelevan=2;
    //membatasi yang relevan
    
    //insert ke tabel auto
    mysql_query("insert into auto (query) values ('$keyword')");
    mysql_query("truncate tbcache");
    $resCache = mysql_query("SELECT *	FROM tbcache WHERE Query = '$keyword' ORDER BY Value DESC");
    $num_rows = mysql_num_rows($resCache);
    if ($num_rows >0) {
        while ($rowCache = mysql_fetch_array($resCache)) {
            $docId = $rowCache['DocId'];
            $sim = $rowCache['Value'];
            if ($docId != 0) {
                $resBerita = mysql_query("SELECT * FROM tbberita WHERE Id = $docId");
                $rowBerita = mysql_fetch_array($resBerita);
                $judul = $rowBerita['Judul'];
                $berita = $rowBerita['Berita'];
                echo $docId . ". (" . $sim . ") <font color=blue><b>". $judul . "</b></font><br />";
                echo 'berita <br />';
            }
            else{
                echo 'Tidak ada <br />';
            }
        }
    }
    else{
        Similarity($keyword);
        $resCache = mysql_query("SELECT * FROM tbcache WHERE Query = '$keyword' ORDER BY Value DESC");
        $num_rows = mysql_num_rows($resCache);
        $urut=1;
        while ($rowCache = mysql_fetch_array($resCache)) {
            $docId = $rowCache['DocId'];
            $sim = $rowCache['Value'];
            if ($docId != 0) {
                $retrieved = $num_rows;                
                if($urut==1){
                    $precision = 1/$urut*100;
                    $recall = $urut/$limitrelevan*100 ;
                }
                if($urut==2){
                    $precision = 2/$urut*100;
                    $recall = $urut/$limitrelevan*100 ;
                }                
                if($urut>2){
                    $precision = $limitrelevan/$urut*100;
                    $recall = $limitrelevan/$limitrelevan*100 ;
                }
                //ambil berita dari tabel tbberita, tampilkan
                $resBerita = mysql_query("SELECT * FROM tbberita WHERE Id = $docId");
                $rowBerita = mysql_fetch_array($resBerita);
                $judul = $rowBerita['Judul'];
                $berita = $rowBerita['Berita'];
                print($docId . ". (" . $sim .") <font color=blue><b>". $judul . "</b></font> ==>  <font color=red>recall = ".$recall." % precision = ".$precision." % </font><br />");
                print($berita . "<hr />");
                $urut++;
            }            
            else{
                print("<b>Tidak ada... </b><hr />");
            }
        }
    }
}
?>
