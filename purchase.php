
<html>
<head>
<title>Purchase</title>
</head>
<link rel="stylesheet" type="text/css" href="create.css">

<body>
        <a href="Home.php"><input type="button" value="HOME"></a>

<form method="POST" action="purchase.php">
<table border="" align="center" height="510" width="800" class="table4">
    <tr><td colspan="3"><input type="text" name="purchase" value="Purchase"></td>
        <td colspan="2">No.<input type="number" name="no"></td>
        <td colspan="2">Date<input type="date" name="date"></td></tr>
    <tr><td colspan="7">Party Name<input type="text" name="partyname"></td></tr>
    <tr><td colspan="3">Bill No.<input type="number" name="billno"></td>
        <td colspan="4">Bill Date<input type="date" min="2016" max="2030" name="billdate"></td></tr>
<tr><td colspan="7">Transaction Type
<select name="ttype">
<option value="Cash"selected >Cash</option>
<option value="Credit">Credit</option>
</select></td></tr>
<tr><td>Sr.No.</td><td>Product Name</td><td>Unit</td><td>Quantity</td><td>Expiry Date</td><td>MRP</td><td>Amount</td></tr>
<tr><td><input type="number" name="id1">
<td><select name="pname">
<option value="Cinarest"selected >Cinarest</option>
<option value="Ascoril">Ascoril</option>
<option value="Combiflame">Combiflame</option>
<option value="Paracetamol">Paracetamol</option>
<option value="Albutamol">Albutamol</option>
<option value="Omee">Omee</option>
<option value="Credit">Strepsil</option>
</select></td>
<td><input type="text" name="unit"></td><td><input type="text" name="quantity"></td><td><input type="text" name="expiry"></td><td><input type="text" name="mrp"></td><td><input type="text" name="amount"></td></tr>

<tr><td><input type="number" name="id2">
<td><select name="pname1">
<option value="Cinarest"selected >Cinarest</option>
<option value="Ascoril">Ascoril</option>
<option value="Combiflame">Combiflame</option>
<option value="Paracetamol">Paracetamol</option>
<option value="Albutamol">Albutamol</option>
<option value="Omee">Omee</option>
<option value="Credit">Strepsil</option>
</select></td>
<td><input type="text" name="unit1"></td><td><input type="text" name="quantity1"></td><td><input type="text" name="expiry1" min="2016"></td><td><input type="text" name="mrp1"></td><td><input type="text" name="amount1"></td></tr>
<tr><td colspan="7" align="center"><input type="submit" value="submit" name="submit">
    <input type="reset" value="Reset"></tr>
</table>
</form>
</body>
</html>



<?php

$no=$_POST["no"];
$date=$_POST["date"];
$partyname=$_POST["partyname"];
$billno=$_POST["billno"];
$billdate=$_POST["billdate"];
$ttype=$_POST["ttype"];
$id1=$_POST["id1"];
$pname=$_POST["pname"];
$unit=$_POST["unit"];
$qty=$_POST["quantity"];
$exp=$_POST["expiry"];
$mrp=$_POST["mrp"];
$amount=$_POST["amount"];
$id2=$_POST["id2"];
$pname1=$_POST["pname1"];
$unit1=$_POST["unit1"];
$qty1=$_POST["quantity1"];
$exp1=$_POST["expiry1"];
$mrp1=$_POST["mrp1"];
$amount1=$_POST["amount1"];

$m=new MongoClient();
$db=$m->medical;
$collection=$db->createCollection("purchase");

$document=array("No"=>$no,"Current_date"=>$date,"Party_name"=>$partyname,"Billno"=>$billno,"Billdate"=>$billdate,"Transaction_type"=>$ttype,"id"=>$id1,"pname"=>$pname,"unit"=>$unit,"quantity"=>$qty,"expiry"=>$exp,"mrp"=>$mrp,"amount"=>$amount,"id1"=>$id2,"pname1"=>$pname1,"unit1"=>$unit1,"quantity1"=>$qty1,"expiry1"=>$exp1,"mrp1"=>$mrp1,"amount1"=>$amount1);
$collection->insert($document);
if($submit=$_POST["submit"]){
    header("location:Home.php");
}

?>

