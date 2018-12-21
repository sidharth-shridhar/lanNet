<?php
date_default_timezone_set("Asia/Calcutta");
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    if($text == '')
     fwrite($fp, " ");
	else{
    $fp = fopen("log.php", 'a');
    $time = date("H:i:s");
    $date = date("d-m-Y");
    $d = explode(":", $time);
    $h = $d[0];
    $m = $d[1];
    $s = $d[2];

   
    fwrite($fp, "<br><div class='msgln' style='background-color:#000;height:auto;min-height:18px;border-radius:8px;color:#fff;'>&nbsp;&nbsp;".date("g:i A")."&nbsp;"."<b style='color:#76b900;'>".$_SESSION['name']."</b>&nbsp;&nbsp;: "."<b>&nbsp;&nbsp;".stripslashes(htmlspecialchars($text))."</b>"."</div>");
    if($_SESSION['name'])
    	    fwrite($fp, "");
    else
    	    fwrite($fp, "<hr>");


    fclose($fp);
}
}

?>