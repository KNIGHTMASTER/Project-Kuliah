<?php
    include 'koneksi.php';
    $judul=$_POST['Judul'];
    $isi=$_POST['isi'];
    $insert=mysql_query("Insert into tbberita (Judul, Berita) values ('$judul', '$isi')");    
    if($insert){
        echo "<script>alert('succes')</script>";
        echo "<script>document.location.href='index.php'</script>";
    }
    else{
        echo 'gagal karena = '.  mysql_error();
    }    
?>