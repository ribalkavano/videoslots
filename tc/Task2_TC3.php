<div>
        <span class="fw-bold">Summary: </span> Verify validations by length  
        <br>
          <span class="fw-bold">Priority: </span> Medium
        <br>
          <span class="fw-bold">Reporter: </span> Ivan Rybalka
        <br>
          <span class="fw-bold">Status: </span>   <span class="badge bg-danger">FAIL</span>
        <br>
          <span class="fw-bold">Pre-Condition:</span>
          <p>The "Palindrome" app is enabled</p>
          <div class="row text-center">
            <div class="col-md-4 themed-grid-col">
                <h5>Test Steps</h5>
            </div>
            <div class="col-md-4 themed-grid-col">
                <h5>Test Data</h5>
            </div>
            <div class="col-md-4 themed-grid-col">
                <h5>Expected result</h5>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>1. Click on the 'Calculate' button</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Input field is empty</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Min length = 2 value" is displayed</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>2. Enter the palindrome string in the input field with 1 value</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>T</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Min length = 2 value" is displayed</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>3. Enter the palindrome string in the input field with 2 values</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>$$</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Message "The string '$$' is a Palindrome" is displayed</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>4. Enter a string of 256 characters in the input field</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Message "The string 'string_256_char' is a Palindrome" is displayed</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>5. Enter a string of 270 characters in the input field</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Max length = 256 values" is displayed</p>
                </div>
            </div>
          </div>
          <span class="fw-bold">Post-Condition:</span>
          <p>Click on the "Clear" button</p>
</div>