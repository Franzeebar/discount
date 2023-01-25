<?php
	$product_name = filter_input(INPUT_POST, 'product_name');
	$list_price = filter_input(INPUT_POST, 'list_price');
	$discount_percent = filter_input(INPUT_POST, 'discount_percent');
    $Description = filter_input(INPUT_POST,'Description');
    $Brand = filter_input(INPUT_POST,'Brand');
    $Shipping_costs = filter_input(INPUT_POST,'Shipping_costs');
    $Quantity = filter_input(INPUT_POST,'Quantity');
    $FinalPrice = filter_input(INPUT_PPOST,'FinalPrice')
	
        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;
        
        $list_price_f = "€".number_format($list_price, 2);

        $discount_percent_f = $discount_percent."%";
        $discount_f = "€".number_format($discount, 2);

        $discount_price_f = "€".number_format($discount_price, 2);

        $FinalPrice = "€".number_format($list_price*$Quantity,2);

        //$Description=
        //$Brand=
        //$Shipping_costs=


?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Name:</label>
        <span><?php echo htmlspecialchars($product_name); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>

        <label>Description:</label>
        <span><?php echo htmlspecialchars($Description); ?></span><br>

        <label>Brand:</label>
        <span><?php echo htmlspecialchars($Brand_name); ?></span><br> 

        <label>Shipping costs:</label>
        <span><?php echo $Shipping_costs; ?></span><br>

        <label>Quantity:</label>
        <span><?php echo $Quantity; ?></span><br>
        
        <label>FinalPrice:</label>
        <span><?php echo $FinalPrice; ?></span><br>

        <?php
echo "<h2>Your Input:</h2>";
echo "<h3>Final Price:</h3>";
echo $FinalPrice;
echo "<br>";
echo "<h3>Product Name:</h3>";
echo $product_name;
echo "<br>";
echo "<h3>list price:</h3>";
echo $list_price;
echo "<br>";
echo "<h3>list price of f</h3>";
echo $list_price_f;
echo "<br>";
echo "<h3>Standard discount:</h3>";
echo $discount_percent_f;
echo "<br>";
echo "<h3>Description:</h3>";
echo $Description;
echo "<br>";
echo "<h3>Brand:</h3>";
echo $Brand;
echo "<br>";
echo "<h3>Shipping Costs:</h3>";
echo $Shipping_costs;
echo "<br>";
echo "<h3>Quantity:</h3>";
echo $Quantity;
echo "<br>";
echo "<h3>Quantity:</h3>";
echo $Quantity;
echo "<br>";

?>
    </main>
</body>
</html>