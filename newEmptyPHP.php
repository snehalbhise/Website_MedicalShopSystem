
<?php
$user=$_POST["usern"];
$pass=$_POST["pas"];

$m=new MongoClient();
$db=$m->medical;
$collection=$db->createCollection("LogInfo");

$document=array("UserName"=>$user,"Password"=>$pass);
$collection->insert($document);

if(! $collection)
{
echo 'Registration Unsuccessful';
}
else{
    echo 'Registration Successful';
}


#header('location:login.php');
?>


<a href=""

