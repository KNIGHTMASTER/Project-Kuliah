<?php
include 'elapsedTime.php';

$timer = new Elapse_time();
$timer->start();
?>
<html>
<head>
    <style>
        .atas{
            background-color: gray;
        }
    </style>
        <script type="text/javascript">
            var autoAjax;
            function auto(data){
                //alert(data);
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
                document.getElementById("query").value = data;
                document.getElementById("kotaksugest").style.visibility = "hidden";
                document.getElementById("kotaksugest").innerHTML = "";
            }
        </script>    
        <link rel="stylesheet" href="./SexyButtons/sexybuttons.css" type="text/css" />
<head>
<body>
    <form method="GET" action="#">
        <table border="0" cellspacing="0" cellpadding="5" align="center" valign="center" width="100%">
            <tr class="atas">
                <td align="left"><img src="./images/iconSmall.png"></img><input type="text" name="query" id="query" size="80" onkeyup="auto(this.value)" ></input>
                    <button class="sexybutton"><span><span><span class="search">Telusuri</span></span></span></button>
                </td>
                <td align="left"></td>
            </tr>   
            <tr>
                <td><div align="center" id="kotaksugest" style="position:absolute;top:120;left:220;background-color:lightblue;width:200;visibility:hidden;z-index:100"></div>
            </tr>
        </table>
    </form>            
    <br />
    
<?php
    include 'stemmingECS.php';
    include 'tokenisasi.php';
    include 'stopListRemoval.php';
    include 'ambilCache.php';
    
    $timer->stop();
    echo '<div align=center><strong>Elapsed Time :</strong>'.$timer->get_elapse()."seconds</div><br />";        
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $query=$_GET['query'];
    if($query){
        $query = token($query);
        $query = stRemove($query);
        $query = Enhanced_CS($query);
        //echo $query;
        ambilCache($query);
    }
    else{
        echo 'Query not found';
    }    
    ?>    
<body>
</html>
