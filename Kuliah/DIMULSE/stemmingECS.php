<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'Cek_Prefix_Disallowed_Sufixes.php';
include 'Cek_Rule_Precedence.php';
include 'Del_Derivation_Prefix.php';
include 'Del_Derivation_Suffixes.php';
include 'Del_Inflection_Suffixes.php';
include 'cekKamus.php';

function Enhanced_CS($kata){
    
	$kataAsal = $kata;
	
	/* 1. Cek Kata di Kamus jika Ada SELESAI */
	if(cekKamus($kata)){ // Cek Kamus
		return $kata; // Jika Ada kembalikan
	}
	/* 2. Buang Infection suffixes (\-lah", \-kah", \-ku", \-mu", atau \-nya") */
        $kata = Del_Inflection_Suffixes($kata);	
		
	/* 3. Buang Derivation suffix (\-i" or \-an") */
        $kata = Del_Derivation_Suffixes($kata);
		
	/* 4. Buang Derivation prefix */
	$kata = Del_Derivation_Prefix($kata);
	
        $restem = mysql_query("SELECT * FROM tbstem ORDER BY Id");

	while($rowstem = mysql_fetch_array($restem)) {
		$teks = str_replace($rowstem['Term'],
		$rowstem['Stem'], $teks);
	}
        
	return $kata;
}

?>
