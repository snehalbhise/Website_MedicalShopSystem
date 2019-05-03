<?php

$uname=$_POST["usname"];
$pwd=$_POST["pword"];

$m=new Mongoclient();
$db=$m->medical;
$collection=$db->selectcollection("LogInfo");
$cur=$collection->find(array("UserName"=>$uname));
foreach ($cur as $a) {
    if ($pwd==$a['Password']) {
        header("location:home.php");
    }
    else {
        
        echo"Please Enter Correct User Name & Password";
    }
}



