<?php 
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");

include 'login.php';
include 'post.php';
if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $fp = fopen("log.php", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
    fclose($fp);
    $path_to_file = 'users.html';
    $file_contents = file_get_contents($path_to_file);
    $file_contents = str_replace($_SESSION['name'],"",$file_contents);
    file_put_contents($path_to_file,$file_contents); 
    session_destroy();
    header("Location: index.php"); //Redirect the user
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat J Radio</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
 <?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome,<?php echo " ".$_SESSION['name'];?> <b></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
<div id="chatbox"><?php
if(file_exists("log.php") && filesize("log.php") > 0){
    $handle = fopen("log.php", "a");
    $contents = fread($handle, filesize("log.php"));
    fclose($handle);
     
    echo $contents;
}
?></div>     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" required >
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
 $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'index.php?logout=true';}      
    });
 //If user submits the form
    $("#submitmsg").click(function(){   
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});              
        $("#usermsg").attr("value", "");
        return false;
    });
    function loadLog(){     

        $.ajax({
            url: "log.php",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div               
            },
        });
    }
    //Load the file containing the chat log
    function loadLog(){     
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: "log.php",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div   
                
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }               
            },
        });
    }
    setInterval (loadLog, 2500);
});
</script>
<?php
}
?>
</body>
</html>