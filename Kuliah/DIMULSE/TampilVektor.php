<?php
include 'koneksi.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
<head></head>    
<body>
    <h1 align="center">Perhitungan Panjang Vektor</h1>
    <table border="1" align="center" cellspacing="0" cellpadding="1">
        <tr>
            <th>Doc Id</th>
            <th>Panjang Vektor</th>
        </tr>        
            <?php
            $query = mysql_query("SELECT * from tbvektor");
            while ($row = mysql_fetch_array($query)) {
                echo '<tr>
                    <td>'.$row['DocId'].'</td>
                    <td>'.$row['Panjang'].'</td>
                    </tr>';
            }
            ?>        
    </table>
</body>
</html>

