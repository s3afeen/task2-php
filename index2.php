<?php
// function isPrime($number) {
//     if ($number <= 1) {
//         return false;
//     }

//     if ($number <= 3) {
//         return true;
//     }

//     if ($number % 2 == 0 || $number % 3 == 0) {
//         return false;
//     }
//     return true;
// }

// $input = 3;

// if (isPrime($input)) {
//     echo $input . " is a prime number";
// } else {
//     echo $input . " is not a prime number";
// }
///////////////////////////
// function reverss($string) {
//     return strrev($string);
// }
// $input = "remove";

// $reverss = reverss($input);
// echo $reverss;
///////////////////////////
// function lower($string) {
//     if ($string === strtolower($string)) {
//         return "Your String is Ok";
//     } else {
//         return "Your String is not Ok";
//     }
// }

// $input = "remove";

// $result = lower($input);
// echo $result;
///////////////////////////
// function swap(&$x, &$y) {
//     $temp = $x;
//     $x = $y;
//     $y = $temp;
// }

// $x = 12;
// $y = 10;

// echo "Original values: x = $x, y = $y\n";

// swap($x, $y);

// echo "Swapped values: x = $x, y = $y\n";
///////////////////////////
// function y($number) {
//     $sum = 0;
//     $temp = $number;
//     while ($temp != 0) {
//         $digit = $temp % 10;
//         $sum += $digit ** 3;
//         $temp = (int)($temp / 10);
//     }
//     return $sum == $number;
// }

// $input = 407;

// if (y($input)) {
//     echo "$input is an Armstrong Number\n";
// } else {
//     echo "$input is not an Armstrong Number\n";
// }
//////////////////////////////
// chaaat
// function isPalindrome($string) {
//     // إزالة الفراغات وعلامات الترقيم وتحويل الأحرف إلى صغيرة
//     $filteredString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
//     // التحقق مما إذا كانت السلسلة النصية هي نفسها بعد عكسها
//     return $filteredString == strrev($filteredString);
// }

// // الإدخال
// $input = "Eva, can I see bees in a cave?";

// // التحقق وطباعة النتيجة
// if (isPalindrome($input)) {
//     echo "Yes, it is a palindrome\n";
// } else {
//     echo "No, it is not a palindrome\n";
// }
?>