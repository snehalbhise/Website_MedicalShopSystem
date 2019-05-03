<html>
<head>
<title>Creation</title>
</head>
<link rel="stylesheet" type="text/css" href="create.css">
<body background="1.jpg">
    
    <a href="Home.php"><input type="button" value="HOME"></a>
    <form method="POST" action="creationn.php">
        <table border="" align="center" height="400" width="600" class="table3">
    <TR><td>Product Id :-</td><td><input type="text" name="id"></td></TR>
    <tr><td>Name :-</td><td><input type="text" name="name"></td></tr>
    <tr><td>Unit Of Measure :-</td><td><input type="text" name="unit"></td></tr>
    <tr><td>Company :-</td><td><input type="text" name="company"></td></tr>
    <tr><td>Date Of Expiry :-</td><td><input type="Date" min="2016" max="2100" name="expdate"></td></tr>

    <tr>
        <td align="center" colspan="2"><input type="submit" value="Create" name="submit">&nbsp;&nbsp;
        <input type="reset" value="Reset" name="submit"></td>
    </tr>
</table>
    </form>
</body>
</html>

<?php
try{
$id=$_POST["id"];
$name=$_POST["name"];
$unit=$_POST["unit"];
$company=$_POST["company"];
$expdate=$_POST["expdate"];
$m=new Mongoclient();
$db=$m->medical;
$collection=$db->createcollection("creation");
$document=array("Product_Id"=>$id,"Product_Name"=>$name,"Unit_Of_Measure"=>$unit,"Company"=>$company,"Date_Of_Expiry"=>$expdate);
$collection->insert($document);
if($submit=$_POST["submit"])
{
    header("location:home.php");
}
}
 catch (exception $e){
       echo $e->getMessage();
 }
?>



