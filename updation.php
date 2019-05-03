<html>
<head>
<title>Updation</title>
</head>
<link rel="stylesheet" type="text/css" href="create.css">

<body>
        <a href="Home.php"><input type="button" value="HOME"></a>

    <form action="updation.php" method="POST">
<table border="" align="center" height="520" width="800" class="table4">
    <tr><td> Product Name :-<input type="text" name="name"></td></tr>
    <tr><td>Unit Of Measure:-<input type="text" name="unit"></td></tr>
    <tr><td>Company :-<input type="text" name="company"></td></tr>
    <tr><td>Date Of Expiry :-<input type="Date" min="1900" max="2100" name="expdate"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit" name="subm">
    <input type="reset" value="Reset"></td></tr>
</table>
    </form>
</body>
</html>


<?php
$pid=$_POST["pid"];
$name=$_POST["name"];
$unit=$_POST["unit"];
$expdate=$_POST["expdate"];
$company=$_POST["company"];

$m=new Mongoclient();
$db=$m->medical;
$collection=$db->selectCollection("creation");



$collection->update(array("Product_Id"=>$pid),array(set=>array("Product_Name"=>$name)));
$collection->update(array("Product_Id"=>$pid),array(set=>array("Unit_Of_Measure"=>$unit)));
$collection->update(array("Product_Id"=>$pid),array(set=>array("Date_Of_Expiry"=>$expdate)));
$collection->update(array("Product_Id"=>$pid),array(set=>array("Company"=>$company)));
if($submit=$_POST["subm"])
{
    header("location:home.php");
}











?>
