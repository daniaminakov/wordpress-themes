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
               <div class="inputs-size">
                  <div class="inputs-size__item">
                     <p class="label">Length</p>
                     <div class="form3-item-inputs">
                        <input type="number" name="length_ft-1" autocomplete="off" class="inp" placeholder="Ft" required>
                        <input type="number" name="length_in-1" autocomplete="off" class="inp" placeholder="In" required>
                     </div>
                  </div>
                  <div class="inputs-size__item">
                     <p class="label">Width</p>
                     <div class="form3-item-inputs">
                        <input type="number" name="width_ft-1" autocomplete="off" class="inp" placeholder="Ft" required>
                        <input type="number" name="width_in-1" autocomplete="off" class="inp" placeholder="In" required>
                     </div>
                  </div>
                  <div class="inputs-size__item">
                     <p class="label">Height</p>
                     <div class="form3-item-inputs">
                        <input type="number" name="height_ft-1" autocomplete="off" class="inp" placeholder="Ft" required>
                        <input type="number" name="height_in-1" autocomplete="off" class="inp" placeholder="In" required>
                     </div>
                  </div>
                  <div class="inputs-size__item">
                     <p class="label">Weigth</p>
                     <div class="form3-item__last">
                        <input type="number" name="weigth_lbs-1" autocomplete="off" class="inp" placeholder="Lbs" required>
                     </div>
                  </div>
               </div>
            </div>

            <div class="check-wrapper check_wrapper_other">
               <p class="check-title">
                  Is it operable
               </p>
               <div class="check-box">
                  <div class="checkbox-item">
                     <input type="radio" name="is_operable" value="Yes" id="is_operable_yes" checked="checked">
                     <label for="is_operable_yes">Yes</label>
                  </div>
                  <div class="checkbox-item">
                     <input type="radio" name="is_operable" value="No" id="is_operable_no">
                     <label for="is_operable_no">No</label>
                  </div>
               </div>
            </div>

            <div class="check-wrapper check_wrapper_boat">
               <p class="check-title">
                  Is it on trailer?
               </p>
               <div class="check-box">
                  <div class="checkbox-item">
                     <input type="radio" name="is_trailer" value="Yes" id="is_trailer_yes" checked="checked">
                     <label for="is_trailer_yes">Yes</label>
                  </div>
                  <div class="checkbox-item">
                     <input type="radio" name="is_trailer" value="No" id="is_trailer_no">
                     <label for="is_trailer_no">No</label>
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