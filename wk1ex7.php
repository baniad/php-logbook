<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
echo $gross . " is the gross pay";
?>
</body>
</html>
<br>
<html>
<body>
<?php
    $hourlyrate	= 5.75;
    $hoursperweek = 40;
    $gross = $hourlyrate * $hoursperweek;
    $taxRate = 0.22;
    $tax = $gross * $taxRate;
    $net = $gross - $tax;
    echo $net . " is the net pay";
?>
</body>
</html>