<?php
    session_start();

    // redirect to index.php
    function redirect() {
        header('Location: index.php');
        exit;
    }


    $array_option1 = htmlspecialchars(trim($_POST["arrayOption1"]));

    if ($array_option1 === null) {
        $_SESSION["arrayOption1"] = "Output";
    } else {
        $_SESSION["arrayOption1"] = $array_option1;
    }
   

    // get only numbers
    function toNum($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
    
        return preg_replace('/[^0-9\-]/', '', $string); // Removes special chars.
    }

    // string to array and small validation
    if (toNum($array_option1)) {
        $array = preg_split("/[,]+/", $array_option1);
    } else {
        $_SESSION['arrayOption1'] = '';
        $_SESSION["result_option1"] = "\nOnly numeric values";
        redirect();
    }

    // we are looking for only 2 and 3 since these are simple multipliers for numbers 4 and 6
    function isValueMultiplierCount($arr) {
        $array_length = count($arr);
        $count4 = 0;
        $count6 = 0;
        $newArr4 = array();
        $newArr6 = array();

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

         $arrToStr4 = implode(" | ",$newArr4);
         $arrToStr6 = implode(" | ",$newArr6);

         return "Number of multipliers for '4': $count4 <br> $arrToStr4 <br> Number of multipliers for '6': $count6 <br> $arrToStr6 ";
      };
      
      $_SESSION["result_option1"] = isValueMultiplierCount($array);

      // buttons 
    if(isset($_POST['calculate1'])) { 
        calculateBtn(); 
    } else if(isset($_POST['clear1'])) {
        clearBtn();
    }
    
    function calculateBtn() {
        $_SESSION["result_option1"];
        redirect();
        exit;
    }

    function clearBtn() {
        $_SESSION['result_option1'] = '';
        $_SESSION['arrayOption1'] = '';
        redirect();
        exit;
    }

?>