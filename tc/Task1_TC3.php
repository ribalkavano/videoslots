<div>
        <span class="fw-bold">Summary: </span> Verify validation by not numeric symbols for "Array" input field
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
                    <p>1. Enter the array with special symbols, spaces and letters in the "Array" input field</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>@,!,ax,Ps, ,+,_,)(,*&</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>2. Click on the 'Calculate' button</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Only numeric values" is displayed</p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>3. Enter the array with numeric and special symbols in the "Array" input field</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>2,3,5,&,4,%,-,7</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>4. Click on the 'Calculate' button</p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p></p>
                </div>
            </div>
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-3 bg-light border rounded-3">
                    <p>Validation message "Only numeric values" is displayed</p>
                </div>
            </div>
          </div>
          
          <span class="fw-bold">Post-Condition:</span>
          <p>Click on the "Clear" button</p>
</div>