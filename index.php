<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>PHP Test Tasks</title>
</head>

<body>
    
    <main>
        
    <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Task 1</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
      <div class="col d-flex align-items-start">
        
        <div>
          <h2>Find the number of Multipliers</h2>
          <p>Create a function that takes an array of numbers as a parameter and returns the number of values that are a multiplier of either 4 or 6 (or, of course, both).</p>
            <div class="h-100 p-3 border rounded-3">
                <h4>Option 1</h4>
                <form action="task1_option1.php" name="option1" method="post">
                    <div class="mb-3">
                        <label for="Task1Option1" class="form-label">Enter the Array</label>
                        <input type="text" name="arrayOption1" class="form-control" id="Task1Option1" placeholder="1,2,3,4,5,6,7">
                    </div>
                    <div class="mb-3">
                        <div class="col-md themed-grid-col">
                            <div class="h-100 p-3 bg-light border rounded-3">
                                <p>Output</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
                    <button type="submit" name="clear" class="btn btn-outline-primary">Clear</button>
                </form>
            </div>
            <br>
            <div class="h-100 p-3 border rounded-3">
                <h4>Option 2</h4>
                <form action="task1_option2.php" name="option2" method="post">
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <input type="text" name="arrayOption2" class="form-control" value="<?=$_SESSION['arrayOption2']?>" placeholder="1,2,3,4,5,6,7">
                            <!--<input type="text" name="arrayOption2" class="form-control" value="" placeholder="1,2,3,4,5,6,7">-->

                        </div>
                        <div class="col-md-4">
                            <input type="text" name="valueOption2" class="form-control" value="<?=$_SESSION['valueOption2']?>" placeholder="Enter 4 or 6">
                            <!--<input type="text" name="valueOption2" class="form-control" value="" placeholder="Value">-->

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md themed-grid-col">
                            <div class="h-100 p-3 bg-light border rounded-3">
                                <p><?=$_SESSION['result']?></p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
                    <button type="submit" name="clear" class="btn btn-outline-primary">Clear</button>
                    
                </form>
            </div>
    
        </div>
      </div>
        <div class="col align-items-start">
        
            <div class="accordion" id="accordion1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                        Test Case MLP-001
                    </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                    <div class="accordion-body">
                        <?php require "tc/Task1_TC1.php" ?>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                        Test Case MLP-002
                    </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion1">
                    <div class="accordion-body">
                        <?php require "tc/Task1_TC2.php" ?>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                        Test Case MLP-003
                    </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion1">
                    <div class="accordion-body">
                        <?php require "tc/Task1_TC3.php" ?>
                    </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
      
    </div>
  </div>

    <!-- Task2 -->

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Task 2</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
      <div class="col align-items-start">
        
        <div>
          <h2>Palindrome?!</h2>
          <p>Write a function that tests if a string is a palindrome.</p>
            <div class="h-100 p-3 border rounded-3">
            <form action="task2.php" name="task2" method="post">
                <div class="mb-3">
                    <label for="formTask2" class="form-label">Enter the String</label>
                    <input type="text" class="form-control" name="arrayPal" id="formGroupExampleInput" placeholder="radar">
                </div>
                <div class="mb-3">
                    <div class="col-md themed-grid-col">
                        <div class="h-100 p-3 bg-light border rounded-3">
                            <p>Output</p>
                        </div>
                    </div>
                </div>
                <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
                <button type="submit" name="clear" class="btn btn-outline-primary">Clear</button>
            </form>
            </div>
    
        </div>
      </div>
        <div class="col align-items-start">
        
            <div class="accordion" id="accordion2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Test Case PLDM-001
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion2">
                    <div class="accordion-body">
                        <?php require "tc/Task2_TC1.php" ?>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Test Case PLDM-002
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion2">
                    <div class="accordion-body">
                        <?php require "tc/Task2_TC2.php" ?>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Test Case PLDM-003
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion2">
                    <div class="accordion-body">
                        <?php require "tc/Task2_TC3.php" ?>
                    </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
      
    </div>
  </div>

  <!-- Task 3 -->

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Task 3</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
      <div class="col align-items-start">
        
       
        <div class="col align-items-start">
        
            <div class="accordion" id="accordion3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1st" aria-expanded="true" aria-controls="collapseOne">
                        BUG-001
                    </button>
                    </h2>
                    <div id="collapse1st" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion3">
                    <div class="accordion-body">
                        <?php require "bug/bug_1.php" ?>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2nd" aria-expanded="false" aria-controls="collapseTwo">
                        BUG-002
                    </button>
                    </h2>
                    <div id="collapse2nd" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion3">
                    <div class="accordion-body">
                        <?php require "bug/bug_2.php" ?>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3rd" aria-expanded="false" aria-controls="collapseThree">
                        BUG-003
                    </button>
                    </h2>
                    <div id="collapse3rd" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion3">
                    <div class="accordion-body">
                        <?php require "bug/bug_3.php" ?>
                    </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
      
    </div>
  </div>

    </main>
</body>
</html>