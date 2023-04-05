
<?php
$principal = 800000; //Amount of loan given
$termInMonths = 10; //The duration of loan in months
$interestRate = 3/100; //Interest rate applied on reducing balance
$monthlyPrincipal = $principal/$termInMonths; //Principal agreed per month
$totalPayable = 0; //Hold total amount to be paid at the end of loan term

echo "Principal: {$principal} <br>";
echo "Term in months: {$termInMonths} <br>";
echo "Interest rate: {$interestRate} <br>";
echo "Monthly principal: {$monthlyPrincipal} <br>";
echo "Total payable: {$totalPayable} <br>";


for( $i = 0; $i < $termInMonths; $i++ ) :

	$nextMonthPayment = ($i == 0) ? $monthlyPrincipal + ($principal * $interestRate) : $monthlyPrincipal + ($principal - ($monthlyPrincipal * $i ) ) * $interestRate;
	
	$monthNumber = ( $i == 0 ) ? 1: $monthNumber + 1;

	echo '<p><b>Month '.$monthNumber.':</b> '.number_format( $nextMonthPayment ).'</p>';
	
	$totalPayable += $nextMonthPayment;

endfor;

echo '<p><b>Total pay: </b>'.number_format( $totalPayable ).'</p>';

echo '<p><b>Interest paid: </b>'.number_format( ($totalPayable - $principal) ).'</p>';