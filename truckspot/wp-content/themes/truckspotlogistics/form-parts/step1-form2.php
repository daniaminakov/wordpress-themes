<div id="step-1" class="step-block">
   <div class="step-box">
      <div class="step-nav">
         <div class="step-nav__item active">
            1. Vehicle Information
         </div>
         <div class="step-nav__item">
            2. Origin & Destination
         </div>
         <div class="step-nav__item">
            3. Get Your Quote
         </div>
      </div>
      <div class="step-content">
         <div class="step-content-main">
            <div class="step-content-top">
               <p class="step-of">Step 1 of 3</p>
               <h2>Tell us more about your <span class="selected_transport"></span></h2>
            </div>
            <!-- Add another(container) -->
            <div class="temp-container">
               <p class="label">Year make and model</p>
               <input type="text" name="vehicle_all-1" autocomplete="off" class="inp" required>
            </div>
            <div class="check-wrapper">
               <p class="check-title">
                  Does it run?
               </p>
               <div class="check-box">
                  <div class="checkbox-item">
                     <input type="radio" name="does_run" value="Yes" id="does_run_yes" checked="checked">
                     <label for="does_run_yes">Yes</label>
                  </div>
                  <div class="checkbox-item">
                     <input type="radio" name="does_run" value="No" id="does_run_no">
                     <label for="does_run_no">No</label>
                  </div>
               </div>
            </div>
         </div>                     
         <div class="step-buttons">
            <button class="add_btn light-btn" type="button">+ Add another vehicle</button>
            <button class="btn1 btn-next btn-form" type="button" aria-controls="step-2">Continue to Step 2</button>
         </div>
      </div>
   </div>
</div>