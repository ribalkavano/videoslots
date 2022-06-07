<div>
        
          <span class="fw-bold">Severity: </span> Critical
        <br>
          <span class="fw-bold">Priority: </span> High
        <br>
          <span class="fw-bold">Reporter: </span> Ivan Rybalka
        <br>
          <span class="fw-bold">Assigned to: </span> Ivan Rybalka
        <br>
          <span class="fw-bold">Fix Version: </span> v1.01
        <br>
          <span class="fw-bold">Status: </span>   <span class="badge bg-primary">Open</span>
        <br>
        <br>
          <span class="fw-bold">Summary: </span> [Registration] - An infinite preloader is displayed when clicking on the "Register" button 
        <br>
          <span class="fw-bold">Description: </span>   An infinite preloader is displayed, which does not allow the user to complete the registration
        <br>

          <div class="row mb-3">
            <div class="col-md-4 themed-grid-col">
                <div class="h-100 p-1">
                    <span class="fw-bold">Steps To Reproduce: </span>
                </div>
            </div>
            <div class="col-md-8 themed-grid-col">
                <div class="h-100 p-2 bg-light border rounded-1">
                    <p>1. Open the <a href="https://www.videoslots.com">Videoslots</a> web site (clear cookies)</p>
                    <p>2. Click on the "Register" button</p>
                    <p>3. Fill email and password fields with correct values</p>
                    <p>4. Check the "I agree to Videoslots Privacy Policy" and "I accept Videoslots Terms and conditions"</p>
                    <p>5. Select the "Poland (PL)"</p>
                    <p>6. Enter the valid phone number</p>
                    <p>7. Click on the "Register" button</p>
                </div>
            </div>
          </div>
          
          <br>
            <span class="fw-bold">Actual Result: </span> "The /registration.php?step=1 request is failed with Code Status: 405. An infinite preloader is displayed"
          <br>
            <span class="fw-bold">Expected Result: </span> "Registration step 2" is opened
            <br>
            <br>
            <span class="fw-bold">Attachments: </span> <a href="https://drive.google.com/file/d/1NnE29gam-9qI_2vVZ6lJWdA_uf0GITrz/view?usp=sharing">bug_002.mp4</a>
  
</div>