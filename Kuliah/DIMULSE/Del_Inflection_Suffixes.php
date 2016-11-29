<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Del_Inflection_Suffixes($kata){ 
	$kataAsal = $kata;
	if(eregi('([km]u|nya|[kl]ah|pun)$',$kata)){ // Cek Inflection Suffixes
		$__kata = eregi_replace('([km]u|nya|[kl]ah|pun)$','',$kata);
		if(eregi('([klt]ah|pun)$',$kata)){ // Jika berupa particles (“-lah”, “-kah”, “-tah” atau “-pun”)
			if(eregi('([km]u|nya)$',$__kata)){ // Hapus Possesive Pronouns (“-ku”, “-mu”, atau “-nya”)
				$__kata__ = eregi_replace('([km]u|nya)$','',$__kata);
				return $__kata__;
			}
		}
		return $__kata;	
	}
	return $kataAsal;
}

?>
