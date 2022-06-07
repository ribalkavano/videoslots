<?php
    //session_start();

    print_r($_POST);

    $array_option1 = htmlspecialchars(trim($_POST['arrayOption1']));

    function isNum($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^0-9\-]/', '', $string); // Removes special chars.
     }

     if (isNum($array_option1)) {
        $array = preg_split("/[,]+/", $array_option1);
      } else {
        echo "\nOnly numeric values";
      }


    function isValueMultiplierCount($arr) {
        $array_length = count($arr);
        $count4 = 0;
        $count6 = 0;
        $newArr4 = array();
        $newArr6 = array();
        print_r($arr);
        foreach($arr as $key => $value) {
            if ($value == 2) {
              $count4++;
              $count6++;
              $newArr4[] = "Index [" . $key . "] => " . $value;
              $newArr6[] = "Index [" . $key . "] => " . $value;
            } else if ($value == 3) {
                $count6++;
                $newArr6[] = "Index [" . $key . "] => " . $value;
            }
        }
         
         echo "\nNumber of multipliers for '4': $count4";
         echo "\nNumber of multipliers for '6': $count6\n";
         print_r($newArr4);
         print_r($newArr6);
      };
      
      isValueMultiplierCount($array);