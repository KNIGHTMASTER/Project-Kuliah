<?php
include 'koneksi.php';
$kata = $_POST['q'];
$query = mysql_query("select distinct query from auto where query like '%$kata%' limit 10");
while ($row = mysql_fetch_array($query)) {
    //
    echo '<li onClick="isi(\''.$row[0].'\');" style="cursor:pointer">'.$row[0].'</li>';     
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
