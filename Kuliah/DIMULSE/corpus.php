<?php
 include 'koneksi.php';
?>
<html>
<head></head>    
<body>    
    <h1 align="Center">Kumpulan Data || Corpus</h1>
<?php    
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $query = mysql_query("select * from tbberita order by id");
    while ($row = mysql_fetch_array($query)) {
        echo '<font color="blue">';
        echo 'Id : '.$row['Id']." ";        
        echo 'Judul :'.$row['Judul'];
        echo '</font>';
        echo '<hr />';
        echo $row['Berita'];
        echo '<hr />';
    }
?>
    
</body>
</html>
