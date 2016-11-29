<!DOCTYPE html>
<?php
include 'koneksi.php';
include 'stopListRemoval.php';
include 'tokenisasi.php';
include 'stemmingECS.php';
include 'elapsedTime.php';

$timer = new Elapse_time();
$timer->start();
?>
<html>
    <head>
        <script type="text/javascript">
            var autoAjax;
            function auto(data){                
                if(data.length==0){
                    document.getElementById("kotaksugest").style.visibility = "hidden";
                }
                else{
                    autoAjax=buatAjax();                    
                    url="autocari.php";
                    autoAjax.onreadystatechange = stateChanged;                    
                    var params = "q="+data;
                    autoAjax.open("POST", url, true);                    
                    autoAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    autoAjax.setRequestHeader("Content-length", params.length);
                    autoAjax.setRequestHeader("Connection", "close");
                    autoAjax.send(params);
                }
            }
             function buatAjax(){
                if(window.XMLHttpRequest()){
                    return new XMLHttpRequest();
                }
                if(window.ActiveXObject){
                    return new ActiveXObject("Microsoft.XMLHTTP");
                }
                return null;
            }
            function stateChanged(){
                var data;
                if(autoAjax.readyState == 4 && autoAjax.status == 200){                    
                    data = autoAjax.responseText;
                    if(data.length>0){
                        document.getElementById("kotaksugest").innerHTML = data;
                        document.getElementById("kotaksugest").style.visibility = "";
                    }
                    else{
                        document.getElementById("kotaksugest").innerHTML = "";
                        document.getElementById("kotaksugest").style.visibility = "hidden";
                    }
                }
            }
            function isi(data){
                document.getElementById("textfield1").value = data;
                document.getElementById("kotaksugest").style.visibility = "hidden";
                document.getElementById("kotaksugest").innerHTML = "";
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>DIGITAL MULTIMEDIA SEARCH ENGINE</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="./SexyButtons/sexybuttons.css" type="text/css" />
    </head>
    <body>
<div id="wrapper">
	<div id="menu"> 
		<ul>
			<li class="current_page_item">                        
			<li><a href="Corpus.php">Tampilkan Corpus</a></li>
			<li><a href="DoIndexing.php">Indexing</a><br /></li>
			<li><a href="DoPembobotan.php">Pembobotan</a></li>
			<li><a href="DoPanjanglVektor.php">Hitung Panjang Vektor</a></li>
		</ul>	
                <ul>
                        <li><a href="TampilIndexing.php">Tampil Indexing</a></li>
                        <li><a href="TampilVektor.php">Tampil Vektor</a></li>
                        <li><a href="TampilCache.php">Tampil Cache</a></li>
                </ul>
                <ul>
                        <li><a href="TruncateIndex.php">truncate index</a></li>
                        <li><a href="TruncateCache.php">truncate Cache</a></li>
                        <li><a href="TruncateVektor.php">truncate Vektor</a></li>
                        <li><a href="inputDoc.php">Input Document</a></li>
                </ul>
	</div>
	<!-- end #menu -->
        <br />
        <br />
        <br />
        <br />        
        <br />
	<div id="header" align="center">	            
            <a href="#"><img src="./images/iconBig.png"></img></a>
            <br />
	</div>	
	
	<div id="logo" class="current_page_item">	
                <br />
		<div >
			<form method="get" action="telusuri.php">
				<div align="center">
					<input type="text" id="textfield1" onkeyup="auto(this.value)" name="query" value="" size="60" />
                                        <!--<AUTO COMPLETE || AUTO SUGGEST>-->                                        
					<!--<SEXY BUTTON GOOGLE>-->
                                        <button class="sexybutton"><span><span><span class="search">Telusuri</span></span></span></button>
				</div>
			</form>
		</div>
	</div>
        <div align="center" id="kotaksugest" style="position:fixed;top:80;left:300;background-color:lightblue;width:200;visibility:hidden;z-index:100"></div>
	<!-- end #header -->

<div id="footer">
    <br />    
    <strong><p>Copyright &copy; 2012</p></strong>
	<p>Achmad Fauzi  ||  Moch Dannish  ||  Achmad Hasan</p>
	
</div>
<!-- end #footer -->

         <br />

        <?php            
            $teks=$_GET['input'];
            //echo 'awal = '.$teks."<br />";
            $teks =  token($teks);                        
            $teks = stRemove($teks);                
            $teks = Enhanced_CS($teks);
            //echo "hasil = ".$teks .'<br />';
            $timer->stop();
            //echo '<div align=center>Elapsed Time :'.$timer->get_elapse()."seconds</div>";
        ?>
        
    </body>    
</html>
