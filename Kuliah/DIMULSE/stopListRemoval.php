<?php
include 'koneksi.php';

function stRemove($teks){
    $teks=strtolower(trim($teks));
    $word=explode(" ", $teks);
    //membuang spasi
    $word=str_replace(" ","", $word);
    $query=mysql_query("select Stoplist from tbstoplist");
    $u=0;
    while ($stoplist = mysql_fetch_array($query)) {
        $stopword[$u] = trim($stoplist[0]);
        $u++;
    }
    $stoplist=array_intersect($stopword, $word);
    $hapusstoplist=array_diff($word, $stoplist);
    $daftar=array();
    $daftar=$hapusstoplist;
    $teks=implode(" ", $hapusstoplist);
    return $teks;
}

?>