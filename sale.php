<html>
<head>
<title>Sale</title>
</head>
<link rel="stylesheet" type="text/css" href="create.css">

<body>
        <a href="Home.php"><input type="button" value="HOME"></a>

    <form method="POST" action="sale.php">
<table border="" align="center" height="510" width="600" class="table4">
    <tr><td colspan="2"><input type="text" name="SALE" value="SALE"></td><td colspan="2">No.<input type="number" name="no"></td><td colspan="3">Date<input type="date" name="date"></td></tr>
    <tr><td colspan="7">Customer Name<input type="text" name="cname"></td></tr>
<tr><td colspan="7">Address<textarea name="address" rows="5" cols="20"></textarea></td></tr>
<tr><td colspan="4">Order No.<input type="number" name="orderno"></td><td colspan="3">Order Date<input type="date" name="orderdate"></td></tr>
<tr><td colspan="7">Transaction Type
<select name="ttype">
<option value="Cash"selected >Cash</option>
<option value="Credit">Credit</option>
</select></td></tr>
<tr><td>Sr.No.</td><td>Product Name</td><td>Unit</td><td>Quantity</td><td>Expiry Date</td><td>MRP</td><td>Amount</td></tr>
<tr><td><input type="text" name="id1"></td>
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
<tr><td><input type="text" name="id2"></td>
    <td><select name="pname1">
<option value="Cinarest"selected >Cinarest</option>
<option value="Ascoril">Ascoril</option>
<option value="Combiflame">Combiflame</option>
<option value="Paracetamol">Paracetamol</option>
<option value="Albutamol">Albutamol</option>
<option value="Omee">Omee</option>
<option value="Credit">Strepsil</option>
</select></td>
    <td><input type="text" name="unit1"></td><td><input type="text" name="quantity1"></td><td><input type="text" name="expiry1"></td><td><input type="text" name="mrp1"></td><td><input type="text" name="amount1"></td></tr>

<tr><td colspan="7" align="center"><input type="submit" value="submit" name="submit"><input type="reset" value="Reset" name="submit">
</tr>
</table></form>
</body>
</html>


<?php
try{
$no=$_POST["no"];
$date=$_POST["date"];
$cname=$_POST["cname"];
$address=$_POST["address"];
$orderno=$_POST["orderno"];
$orderdate=$_POST["orderdate"];
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
$collection=$db->createCollection("sale");

$document=array("No"=>$no,"Current_date"=>$date,"Customer_name"=>$cname,"Address"=>$address,"Orderno"=>$orderno,"Orderdate"=>$orderdate,"Transaction_type"=>$ttype,"id"=>$id1,"pname"=>$pname,"unit"=>$unit,"quantity"=>$qty,"expiry"=>$exp,"mrp"=>$mrp,"amount"=>$amount,"SrNo"=>$id,"Product_Name"=>$pname,"Unit"=>$unit,"Quantity"=>$qty,"Expiry"=>$exp,"MRP"=>$mrp,"Amount"=>$amount,"id"=>$id1,"pname"=>$pname,"unit"=>$unit,"quantity"=>$qty,"expiry"=>$exp,"mrp"=>$mrp,"amount"=>$amount,"SrNo1"=>$id2,"Product_Name1"=>$pname1,"Unit1"=>$unit1,"Quantity1"=>$qty1,"Expiry1"=>$exp1,"MRP1"=>$mrp,"Amount1"=>$amount1);
$collection->insert($document);
if($submit=$_POST["submit"]){
    header("location:Home.php");
}
}
 catch (exception $e){
     echo $e->getMessage();
 }

