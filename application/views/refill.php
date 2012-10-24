<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <style type="text/css">
            
        h1 {color: #666; font-family: Calibri; font-size: 21px;}
    
    </style>
        
</head>
<body>
    
<h1>Deze producten moeten worden hervuld.</h1>
    
<?php
   
    echo "<table border='0'><tr><td><b>Producten</b></td><td><b>Verval datum</b></td><td><b>Aantal</b></td></tr>";

    foreach($products as $product)
    {
        if($product['quantity'] <= '2')
        {
            echo "  <tr><td>".$product['product_name']."</td><td>".$product['expire_date']."</td><td>".$product['quantity']."</td></tr>
                 ";
        }
    }

    echo "</table>";

?>
    
</body>
</html>