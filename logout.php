<?php

if(isset($_SESSION['qface_userid']))
{
 $_SESSION['qface_userid'] = null;
 unset($_SESSION['qface_userid']);
}

header("Location:login.php");
die;
?>