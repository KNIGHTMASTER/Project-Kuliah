<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Cek_Rule_Precedence($kata){
	if(eregi('^(be)[[:alpha:]]+(lah|an)$',$kata)){ // be- dan -i
		return true;
	}
	if(eregi('^(di|([mpt]e))[[:alpha:]]+(i)$',$kata)){ // di- dan -an				
		return true;	
	}
	return false;
}

?>
