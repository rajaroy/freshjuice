<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <style type="text/css">
            
        ul {margin: 0; padding: 0; clear: both;}
        li {list-style-type: none; float: left; margin: 0 10px 0 0;}
    
    </style>
        
</head>
<body>
    
<ul>
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a href="<?php echo base_url('/products'); ?>">All products</a></li>
    <li><a href="<?php echo base_url('/products/expiring'); ?>">Expiring</a></li>
    <li><a href="<?php echo base_url('/products/refill'); ?>">Refill</a></li>
</ul>
    
<br />
    
</body>
</html>