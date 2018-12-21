<?php
session_start();
 
function loginForm(){
    echo'
    <div id="loginform">
    <form action="index.php" method="post">
        <p>Please enter your Roll_no to continue:</p>
        <label for="name">Roll_no:</label>
        <input type="" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
function check($name){

    if(strlen($name)==6 && ord($name[0])==49 && ord($name[1])>=51 && ord($name[1])<=54 && ord($name[2])>=48 && ord($name[2])<=56 && ord($name[3])>=48 && ord($name[3])<=56 && ord($name[4])>=48 && ord($name[4])<=57 && ord($name[5])>=48 && ord($name[5])<=57 )
        return 1;
    else
        return 0;
} 
function validate($name){

    if( strpos(file_get_contents("users.html"),$name) == false) {
        return 1;
    }
    else
        return 0;
}
if(isset($_POST['enter'])){
    if($_POST['name'] != "" && check($_POST['name'])) {
        if(validate($_POST['name'])){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        $fp = fopen("users.html", 'a');
        fwrite($fp, $_SESSION['name']." ");
        fclose($fp);
    }
    else{
        echo '<span class="error">User Already Logged in.</span>';
    }
    }
    else{
        echo '<span class="error">Please type in a valid Roll_no.</span>';
    }
}
?>