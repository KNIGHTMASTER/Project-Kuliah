<?php
include 'koneksi.php';
function token($teks) {

	$tokenKarakter=array('’','—',' ','/','?','.',':',';',',','!','[',']','{','}','(',')','-','_','+','=','<','>','\'','"','\\','@','#','$','%','^','&','*','`','~','0','1','2','3','4','5','6','7','8','9','â€','”','“');
	//bersihkan tanda baca, ganti dengan space
	$teks=str_replace($tokenKarakter, ' ', $teks);
	$tok=strtok($teks, "\n\t");
	while($tok!== false){
		$teks=$tok;
		$tok=strtok("\n\t");
	}	

	//ubah ke huruf kecil		
	$teks = strtolower(trim($teks));
        //kembalikan teks yang telah dipreproses
	return $teks;
} 
?>
