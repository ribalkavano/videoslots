<?php
    // function redirect() {
    //     header('Location: index.php');
    //     exit;
    // }

    // if(isset($_POST['calculate'])) { 
    //     calculateBtn($content_answ); 
    // } else if(isset($_POST['clear'])) {
    //     clearBtn();
    // }

    // function calculateBtn($str) {
    //     $_SESSION["result"] = $str;
    //     redirect();
    //     exit;
    // }

    // function clearBtn() {
    //     $_SESSION['result'] = '';
    //     $_SESSION['arrayOption2'] = '';
    //     $_SESSION['valueOption2'] = '';
    //     redirect();
    //     exit;
    // }

    

    
?>

<?php
    session_start();

    print_r($_POST);

    $array_option2 = htmlspecialchars(trim($_POST['arrayOption2']));
    $value_option2 = htmlspecialchars(trim($_POST['valueOption2']));

    $_SESSION['arrayOption2'] = $array_option2;
    $_SESSION['valueOption2'] = $value_option2;
    
    function isNum($string) {
        $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^0-9\-]/', '', $string); // Removes special chars.
     }

     if (isNum($array_option2)) {
        $array = preg_split("/[,]+/", $array_option2);
      } else {
        echo "\nOnly numeric values";
      }


    $isSimpleMultipliersArr = array(); 


    function findSimpleMultipliers($arr) {
        $simpleMultipliersArr = array();

        foreach($arr as $value) {
        $flag = true;
        //echo "\nValue: $value";
            for ($i = 2; $i < $value; $i++) {
                //echo "\nI: $i";
                if ($value % $i === 0) {
                    $flag = false;
                    break; 
                }
            }
		//echo "\n";
		//var_dump($flag);
		if ($flag === true && $value > 0 && $value != 1) {
		        $simpleMultipliersArr[] = $value;
		    }
	    }

	return $simpleMultipliersArr;
    }

    $isSimpleMultipliersArr = findSimpleMultipliers($array); 

    //print_r($isSimpleMultipliersArr);
  
    function isValueMultiplierCount($num, $arr) {
        $count = 0;
        $multipliersArr = array();
        
        foreach($arr as $value) {
            if ($num % $value === 0 && $num != $value) {
                $count++;
                $multipliersArr[] = $value;
            }
        }
        return  "\nNumber of multipliers for '$num': $count";
        // print_r($multipliersArr);
    }
  
    // global $content_answ;
     $content_answ = isValueMultiplierCount($value_option2, $isSimpleMultipliersArr);


    if(isset($_POST['calculate'])) { 
        calculateBtn($content_answ); 
    } else if(isset($_POST['clear'])) {
        clearBtn();
    }

    function calculateBtn($str) {
        $_SESSION["result"] = $str;
        // redirect();
        exit;
    }

    function clearBtn() {
        $_SESSION['result'] = '';
        $_SESSION['arrayOption2'] = '';
        $_SESSION['valueOption2'] = '';
        // redirect();
        exit;
    }
    

    ?>