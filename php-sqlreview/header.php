<?php
    session_start();
    echo '登录用户名：',$_SESSION['username'],' 	   ';  
    echo '<a href="main.php?action=logout">	注销</a><br />';  
?>

