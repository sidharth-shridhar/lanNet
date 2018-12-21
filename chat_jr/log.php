<?php 
date_default_timezone_set("Asia/Calcutta");
error_reporting(0);
    $time = date("H:i:s");
    $date = date("d-m-Y");
    $d = explode(":", $time);
    $h = $d[0];
    $m = $d[1];
    $t = $d[2];
    if($h == '00' && $m == '00' && ($t == '00' || $t == '01')){
    	$fp = fopen("log.php", 'a');
    		
        fwrite($fp,'<center><hr>'.$date.'</hr></center>');
        
        fclose($fp);
    }
  
 ?>
<br><div class='msgln' style='background-color:#000;height:auto;min-height:18px;border-radius:8px;color:#fff;'>&nbsp;&nbsp;7:32 PM&nbsp;<b style='color:#76b900;'>141374</b>&nbsp;&nbsp;: <b>&nbsp;&nbsp;jdj</b></div><div class='msgln'><i>User 141432 has left the chat session.</i><br></div><div class='msgln'><i>User 143174 has left the chat session.</i><br></div><br><div class='msgln' style='background-color:#000;height:auto;min-height:18px;border-radius:8px;color:#fff;'>&nbsp;&nbsp;7:33 PM&nbsp;<b style='color:#76b900;'>141432</b>&nbsp;&nbsp;: <b>&nbsp;&nbsp;hello</b></div><div class='msgln'><i>User 141432 has left the chat session.</i><br></div><br><div class='msgln' style='background-color:#000;height:auto;min-height:18px;border-radius:8px;color:#fff;'>&nbsp;&nbsp;7:34 PM&nbsp;<b style='color:#76b900;'>141432</b>&nbsp;&nbsp;: <b>&nbsp;&nbsp;kya scene bro</b></div><div class='msgln'><i>User 141432 has left the chat session.</i><br></div><div class='msgln'><i>User 141432 has left the chat session.</i><br></div>