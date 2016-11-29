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
    <h1 align="center">Data Cache</h1>
    <table border="1" cellspacing="0"  cellpadding="5" align="center">
        <tr>
            <th>No</th><th>Query</th><th>Doc Id</th><th>Value</th>
        </tr>
        <?php
        $query = mysql_query("SELECT * FROM tbcache ORDER BY Query ASC");
        while ($row = mysql_fetch_array($query)) {
            echo '<tr>
                    <td>'.$row['Id'].'</td><td>'.$row['Query'].'</td><td>'.$row['DocId'].'</td><td>'.$row['Value'].'</td> </tr>';
       }
       ?>
    </table>
</body>    
</html>

