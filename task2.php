<?php
    session_start();

    // redirect to index.php
    function redirect() {
        header('Location: index.php');
        exit;
    }

    $input_pal = htmlspecialchars(trim($_POST['arrayPal']));

    $_SESSION['arrayPal'] = $input_pal;

    function cleanStr($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }

     $pureStr = strtolower(cleanStr($input_pal)); // to lowercase

    // PHP strrev() function 
    function Palindrome($str) {
        $revString = strrev($str);
        $resStr = '';

        if ($revString == $str){
            $resStr = " IS a Palindrome string.";
        } else {
            $resStr = " is NOT a Palindrome string.";
        }
        return $resStr;
    }

    $_SESSION["resultPal"] = "\"" . $input_pal . "\"" . Palindrome($pureStr);

    // buttons 
    if(isset($_POST['calculatePal'])) { 
        calculateBtn(); 
    } else if(isset($_POST['clearPal'])) {
        clearBtn();
    }

    function calculateBtn() {
        $_SESSION["resultPal"];
        redirect();
        exit;
    }

    function clearBtn() {
        $_SESSION['resultPal'] = '';
        $_SESSION['arrayPal'] = '';
        redirect();
        exit;
    }

?>