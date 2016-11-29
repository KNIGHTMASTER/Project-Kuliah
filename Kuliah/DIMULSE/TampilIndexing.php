<?php
include 'koneksi.php';
    
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>        
    </head>
<body>
    <h1 align="center">Hasil Indexing</h1>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <th>No</th><th>Term</th><th>Doc Id</th><th>Count</th><th>Bobot</th>
        </tr>
        <?php
        $query=  mysql_query("SELECT * FROM tbindex ORDER BY Id");
        while ($row = mysql_fetch_array($query)) {
            echo '<tr><td>'.$row['Id'].'</td><td>'.$row['Term'].'</td><td>'.$row['DocId'].'</td><td>'.$row['Count'].'</td><td>'.$row['Bobot'].'</td></tr>';
        };
        ?>        
    </table>
</body>
</html>
