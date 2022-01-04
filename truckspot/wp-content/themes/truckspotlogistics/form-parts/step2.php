<div id="step-2" class="step-block">
   <div class="step-box">
      <div class="step-nav">
         <div class="step-nav__item completed">
            1. Vehicle Information
         </div>
         <div class="step-nav__item active">
            2. Origin & Destination
         </div>
         <div class="step-nav__item">
            3. Get Your Quote
         </div>
      </div>
      <div class="step-content">
         <div class="step-content-main">
            <div class="step-content-top">
               <p class="step-of">Step 2 of 3</p>
               <h2>Where you need to move your vehicle?</h2>
            </div>
            <div class="move-wrapp">
               <div class="move-input">
                  <label for="zip1" class="label">Origin</label>
                  <input type="text" name="pickup_city" autocomplete="off" id="zip1" list="zip1_element" placeholder="Zip or Sity" class="inp zip_inp" required>
                  <datalist id="zip1_element"></datalist>
               </div>
               <div class="move-input">
                  <label for="zip2" class="label">Destination</label>
                  <input type="text" name="delivery_city" autocomplete="off" id="zip2" list="zip2_element" placeholder="Zip or Sity" class="inp zip_inp" required>
                  <datalist id="zip2_element"></datalist>
               </div>
            </div>
            <div class="check-wrapper">
               <p class="check-title">
                  When it’s ready to be picked up?
               </p>
               <div class="check-box">
                  <div class="checkbox-item">
                     <input type="radio" name="ship_date" value="I`am flexible" id="flexible_date" checked="checked">
                     <label for="flexible_date">I`m Flexible</label>
                  </div>
                  <div class="checkbox-item">
                     <input type="radio" name="ship_date" value="ASAP" id="asap_date">
                     <label for="asap_date">ASAP</label>
                  </div>
                  <div class="checkbox-item">
                     <input type="radio" name="ship_date" value="specific_date" id="specific_date">
                     <label for="specific_date" class="date-item">Specific date</label>
                     <div class="datepicker"></div>
                     <input type="hidden" class="datepicker_value" name="when_date" value="<?php echo date('m/d/Y'); ?>" required>
                  </div>
               </div>
            </div>
         </div>
         <div class="step-buttons">
            <button class="btn-prev light-btn" type="button" aria-controls="step-1">← Back</button>
            <button class="btn1 btn-next btn-form zip_btn_next" type="button" aria-controls="step-3">Continue to Step 3</button>
         </div>
      </div>
   </div>
</div>