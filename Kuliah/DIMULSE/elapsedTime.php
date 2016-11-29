<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Elapse_time {
private $_start = 0;
private $_stop = 0;
private $_elpase = 0;

public function start(){
$this->_start = array_sum(explode(' ',microtime()));
}
public function stop(){
$this->_stop = array_sum(explode(' ',microtime()));
}
public function get_elapse(){
return sprintf("%.3f",$this->_stop - $this->_start);
}
}

?>
