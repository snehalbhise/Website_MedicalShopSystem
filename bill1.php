<html>
    <head><title>Bill</title></head>
    <link rel="stylesheet" type="text/css" href="create.css">

    <body background="1.jpg"></body>
            <a href="Home.php"><input type="button" value="HOME"></a>

</html>
<?php
try{
$no=$_POST["no"];

$conn=new MongoClient();
$dbname=$conn->selectDb("medical");
    $coll=$dbname->selectCollection("sale");
    $item=$coll->find(array("Orderno"=>$no));
    echo "<table border=2px bgcolor=#fcfcfc align=center height=200px width=700px align=center>";
echo "<tr>";
         echo "<th>". "Customer_Name"."</th>";
         echo "<th>"."Address"."</th>";
                  echo "<th>"."Order_No"."</th>";
         echo "<th>"."Order_Date"."</th>";
         echo "<th>". "Id"."</th>";
         echo "<th>"."Product_Name"."</th>";
         echo "<th>"."Unit"."</th>";
                  echo "<th>"."Quantity" ."</th>";
                           echo "<th>"."Expiry_Date"."</th>";
                           echo "<th>"."MRP" ."</th>";
        echo "<th>"."Amount"."</th>";
         echo "</tr>";
        
  
   foreach($item As $item)
    {
        // echo "hhh";
          echo "<tr>".
             "<td>".$item['Customer_Name']."</td>".  
            "<td>".$item['Address']."</td>".  
            "<td>".$item['Orderno']."</td>".  
            "<td>".$item['Orderdate']."</td>". 
            "<td>".$item['id']."</td>".  
            "<td>".$item['pname']."</td>".        
           "<td>".$item['unit']."</td>".
           "<td>".$item['quantity']."</td>".
          "<td>".$item['expiry']."</td>".
          "<td>".$item['mrp']."</td>".
          "<td>".$item['amount']."</td>";
        echo"</tr>";
       
    }     
  echo "</table>";
    $conn->close();
} catch (exception $e) {
    echo $e->getMessage();
}