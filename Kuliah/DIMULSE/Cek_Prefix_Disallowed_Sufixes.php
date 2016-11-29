<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Cek_Prefix_Disallowed_Sufixes($kata){
	if(eregi('^(be)[[:alpha:]]+(i)$',$kata)){ // be- dan -i
		return true;
	}
	if(eregi('^(di)[[:alpha:]]+(an)$',$kata)){ // di- dan -an				
		return true;
		
	}
	if(eregi('^(ke)[[:alpha:]]+(i|kan)$',$kata)){ // ke- dan -i,-kan
		return true;
	}
	if(eregi('^(me)[[:alpha:]]+(an)$',$kata)){ // me- dan -an
		return true;
	}
	if(eregi('^(se)[[:alpha:]]+(i|kan)$',$kata)){ // se- dan -i,-kan
		return true;
	}
        
        return false;
}
?>
