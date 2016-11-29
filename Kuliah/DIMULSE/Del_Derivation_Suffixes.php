<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Del_Derivation_Suffixes($kata){
	$kataAsal = $kata;
	if(preg_match('/(kan)$/',$kata)){ // Cek Suffixes
		$__kata = preg_replace('/(kan)$/','',$kata);		
		if(cekKamus($__kata)){ // Cek Kamus			
			return $__kata;
		}
	}
	if(preg_match('/(an|i)$/',$kata)){ // cek -kan 				
		$__kata__ = preg_replace('/(an|i)$/','',$kata);
		if(cekKamus($__kata__)){ // Cek Kamus
			return $__kata__;
		}
	}
	if(Cek_Prefix_Disallowed_Sufixes($kata)){
		return $kataAsal;
	}
	return $kataAsal;
}
?>
