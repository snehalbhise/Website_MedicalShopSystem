<link rel="stylesheet" type="text/css" href="create.css">
    <a href="Home.php"><input type="button" value="HOME"></a>


<?php
try{
    $conn=new mongo("localhost");
    $dbname=$conn->selectDb("medical");
    $coll=$dbname->selectCollection("purchase");
    $item=$coll->find();
     echo"<td>"."<a href=home.php>"."<input type=submit value=Back name=back>"."</a>"."</td>";
    echo "<table border=2px bgcolor=#fcfcfc align=center>";
echo "<tr>";
         echo "<th>". "Id"."</th>";
         echo "<th>"."Product_Name"."</th>";
         echo "<th>"."Unit" ."</th>";
                  echo "<th>"."Quantity" ."</th>";
                           echo "<th>"."Expiry_Date"."</th>";
                           echo "<th>"."MRP" ."</th>";
        echo "<th>"."Amount"."</th>";
         echo "</tr>";
        
    foreach($item As $item)
    {
        // echo "hhh";
          echo "<tr>".
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
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<body style="background-image: url(green1.JPG);">
</body>





				