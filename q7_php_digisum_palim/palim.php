<?php
function isPalindrome($num) {
  $strNum = (string)$num;
  $revStrNum = strrev($strNum);
  return $strNum === $revStrNum;
}

echo "Enter a number: ";
$num = trim(fgets(STDIN));

if (isPalindrome($num)) {
  echo "$num is a palindrome.";
} else {
  echo "$num is not a palindrome.";
}
?>