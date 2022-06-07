<div>
        <span class="fw-bold">Summary: </span> Verify validations for "Array" input field by length
        <br>
          <span class="fw-bold">Priority: </span> High
        <br>
          <span class="fw-bold">Reporter: </span> Ivan Rybalka
        <br>
          <span class="fw-bold">Status: </span>   <span class="badge bg-danger">FAIL</span>
        <br>
          <span class="fw-bold">Pre-Condition:</span>
          <p>The "Multipliers" app is enabled</p>
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
                    <p>"Array" input field is empty</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Min length = 1 value" is displayed</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>2. Enter the array with one value in the "Array" input field</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>2</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>
                    </p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>3. Click on the 'Calculate' button</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Number of multipliers for 4 and 6 are displayed and equal 1</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>4. Enter the array with 10 values in the "Array" input field</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>2,32,0,7,49,5,3,8,4,11</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>5. Click on the 'Calculate' button</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Max length = 9 values" is displayed</p>
                </div>
            </div>
          </div>
          <br>
          <span class="fw-bold">Post-Condition:</span>
          <p>Click on the "Clear" button</p>
</div>