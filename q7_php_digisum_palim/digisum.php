<?php
function sumOfDigits($num) {
  $sum = 0;
  while ($num > 0) {
    $sum += $num % 10;
    $num = (int)($num / 10);
  }
  return $sum;
}

echo "Enter a number: ";
$num = trim(fgets(STDIN));
echo "Sum of individual digits of $num: ". sumOfDigits($num);
?>