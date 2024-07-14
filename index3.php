<?php
///////////////////////

$string = "welcom TO home";

// $edt1 = strtoupper($string);
// echo $edt1;

// $edt2 = strtolower($string);
// echo $edt2;

// $edt3 = ucfirst($string);
// echo $edt3;

// $edt4 = ucwords($string);
// echo $edt4;

///////////////////////

// $time = "085119";


// $hours = substr($time,0,2);
// $minets = substr($time,2,2);
// $seconds = substr($time,4,2);

// $edt = $hours . ":" . $minets . ":" . $seconds; 
// echo $edt;

////////////////////////

// $x = "I am a full stack developer at orange coding academy";
// $orange = "orange";

// if (strpos($x , $orange) == true){
//     echo 'Word Found!';
// } else {
//     echo 'Word Not Found!';
// }

/////////////////////////

// $url = 'www.orange.com/index.php';

// $edt = parse_url($url, PHP_URL_PATH);
// $name = basename($edt);
// echo $name;

//////////////////////////

// $email = "info@orange.com";

// $name = explode('@',$email)[0];
// echo $name;

///////////////////////////

// $email = "info@orange.com";

// $name = explode('info@orange.',$email)[1];
// echo $name;

///////////////////////////

// function pass($length){
//     $characters  = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
//     $password = '';
//     $tall =strlen($characters);
//     echo $tall, "==";

//     for($i = 0 ; $i < $length ; $i++){
//         $dex = mt_rand(0 , $tall - 1);
//         $password .= $characters[$dex];
//     }
//     return $password;
// }
// echo pass(12);

/////////////////////////////

// $str = 'the new trainee is so genius.';
// echo preg_replace('/That/', 'the', $str, 1);

/////////////////////////////

// $dr1 = "dragonball";
// $dr2 = "dragonboll";

// $tall = min(strlen($dr1), strlen($dr2));
// for ($i = 0 ; $i < $tall ;$i++){
//     if($dr1[$i] !== $dr2[$i]){
//         $y1 = $dr1[$i];
//         $y2 = $dr2[$i];
//         break;
//     }
// }
// echo "First difference between two strings at position : \"$y1\" vs \"$y2\" at position $i , <br>";

////////////////////////////

// function nextLetter($char) {
//     $num = ord($char);
//     if ($char === $char) {
//         return chr($num + 1);
//     }
// }
// $input1 = 'f';
// $input2 = 'F';

// echo "The next letter after '$input1' = " . nextLetter($input1) . "<br>";
// echo "The next letter after '$input2' = " . nextLetter($input2) . "<br>";

/////////////////////////////

// $str = 'The brown fox';
// $fast = 'quick';
// $part = explode(' ', $str);
// array_splice($part, 1, 0, $fast);
// $new = implode(' ', $part);
// echo $new;

/////////////////////////////

// $str = 'The quick brown fox';
// $part = explode(' ', $str);
// echo $part[0];

////////////////////////////

// $num = "0000657022.24";
// $del = str_replace('0', '', $num);
// echo $del;

////////////////////////////

?>