<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        
    <style type="text/css">
        h1 {color: #666; font-family: Calibri; font-size: 21px;}
    </style>
        
</head>
<body>
    <h1>Deze producten zullen komen te vervallen binnen 2 weken.</h1>
<?php
            echo "<table border='0'><tr><td><b>Producten</b></td><td><b>Verval datum</b></td></tr>";

            foreach($products as $product)
            {
                if($product['expire_date'] <= $two_weeks)
                {
                    echo "  <tr><td>".$product['product_name']."</td><td>".$product['expire_date']."</td></tr>
                         ";
                }
            }

            echo "</table>";
?>
    
</body>
</html>