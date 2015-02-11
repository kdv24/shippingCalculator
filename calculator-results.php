<?php 
    $weight = $_GET["weight"];
    $distance = $_GET["distance"]; 
    $shippingCost = (($weight/20) + ($distance/20));
    $groundWeight = ($distance/$weight);
    $randomNumber = rand(-5, 5);
    $luckyNumber = (($shippingCost*$randomNumber) - 10);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Answer Below</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
    <h1>Shipping Calculation</h1>
    <p>The total shipping cost of mailing your package weighing <?php echo $weight; ?>, a distance of <?php echo $distance; ?> is: $<?php echo $shippingCost; ?>.</p>
    <p>Alternatively, you could ship it ground rate for $<?php echo $groundWeight; ?>.</p>
    <p>Or, a final option is the "Do you feel lucky" method of calculation, which this time results in a final cost of $<?php echo $luckyNumber; ?>.</p>
</body>
</html>