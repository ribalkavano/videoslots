<?php
    $array_pal = htmlspecialchars(trim($_POST['arrayPal']));

// function Palindrome($str) {
//   $l = 0;
//   $r = strlen($str) - 1;
//   $flag = 0;

//   while($r > $l){
//     if ($str[$l] != $str[$r]){
//       $flag = 1;
//       break;
//     }
//     $l++;
//     $r--;
//   }

//   if ($flag == 0){
//     echo $str." is a Palindrome string.\n";
//   } else {
//     echo $str." is not a Palindrome string.\n";
//   }
// }

// Palindrome("radar");
// Palindrome("rubber");
// Palindrome("malayalam");
// ?>

//=== PHP strrev() function ===//

<?php
function Palindrome($str) {
  $revString = strrev($str);
  if ($revString == $str){
    echo $str." is a Palindrome string.\n";
  } else {
    echo $str." is not a Palindrome string.\n";
  }
}

Palindrome($array_pal);

?>