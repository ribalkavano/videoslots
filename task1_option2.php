<?php
    session_start();

    // redirect to index.php
    function redirect() {
        header('Location: index.php');
        exit;
    }


    $array_option2 = htmlspecialchars(trim($_POST['arrayOption2']));
    $value_option2 = htmlspecialchars(trim($_POST['valueOption2']));

    $_SESSION['arrayOption2'] = $array_option2;
    $_SESSION['valueOption2'] = $value_option2;
    $_SESSION['result_option2'] = 'Output';

    // get only numbers
    function toNum($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^0-9\-]/', '', $string); // Removes special chars.
     }

     // string to array and small validation
     if (toNum($array_option2)) {
        $array = preg_split("/[,]+/", $array_option2);
      } else {
        $_SESSION['arrayOption2'] = ''; 
        $_SESSION['valueOption2'] = ''; 
        $_SESSION["result_option2"] = "\nOnly numeric values";
        redirect();
      }

    $isSimpleMultipliersArr = array(); 
    
    // get only simple multipliers array
    function findSimpleMultipliers($arr) {
        $simpleMultipliersArr = array();

        foreach($arr as $value) {
        $flag = true;
            for ($i = 2; $i < $value; $i++) {
                if ($value % $i === 0) {
                    $flag = false;
                    break; 
                }
            }
		if ($flag === true && $value > 0 && $value != 1) {
		        $simpleMultipliersArr[] = $value;
		    }
	    }
	    return $simpleMultipliersArr;
    }

    // find number of simple multipliers for set value
    $isSimpleMultipliersArr = findSimpleMultipliers($array); 
  
    function isValueMultiplierCount($num, $arr) {
        $count = 0;
        $multipliersArr = array();
        $arrToStr = "";

        foreach($arr as $key => $value) {
            if ($num % $value === 0 && $num != $value) {
                $count++;
                $multipliersArr[] = $value;
            }
        }
        $arrToStr = implode(" | ",$multipliersArr);
        return "\nNumber of multipliers for '$num': $count <br> Multipliers: $arrToStr";
    }

    $_SESSION["result_option2"] = isValueMultiplierCount($value_option2, $isSimpleMultipliersArr);
   
    // buttons 
    if(isset($_POST['calculate2'])) { 
        calculateBtn(); 
    } else if(isset($_POST['clear2'])) {
        clearBtn();
    }
    
    function calculateBtn() {
        $_SESSION["result_option2"];
        redirect();
        exit;
    }

    function clearBtn() {
        $_SESSION['result_option2'] = '';
        $_SESSION['arrayOption2'] = '';
        $_SESSION['valueOption2'] = '';
        redirect();
        exit;
    }

?>

