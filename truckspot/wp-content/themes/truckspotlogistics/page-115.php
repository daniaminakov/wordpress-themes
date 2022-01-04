<?php 

// Form page

get_header(); ?>

<?php require get_template_directory() . '/inc/breadcrumb.php'; ?>

<div class="page-container">
   <div class="container">
      <div class="select-container">
         <h1 class="title-page" id="vehicle_title">Select Vehicle Shipping Category</h1>
         <div class="select-vehicle">
            <div class="select-vehicle__item" data-form="form1">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-shipping.svg" alt="Car shipping">
               <hr>
               <div class="select_vehicle_title">Car</div>
            </div>
            <div class="select-vehicle__item" data-form="form2">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motorcycle-shipping.svg" alt="Motorcycle shipping">
               <hr>
               <div class="select_vehicle_title">Motorcycle</div>
            </div>
            <div class="select-vehicle__item" data-form="form3">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trailer-shiping.svg" alt="Trailer shiping">
               <hr>
               <div class="select_vehicle_title">Trailer</div>
            </div>
            <div class="select-vehicle__item" data-form="form3">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boat-shipping.svg" alt="Boat shipping">
               <hr>
               <div class="select_vehicle_title">Boat</div>
            </div>
            <div class="select-vehicle__item" data-form="form2">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/atv-utv-shipping.svg" alt="ATV/UTV shipping">
               <hr>
               <div class="select_vehicle_title">ATV/UTV</div>
            </div>
            <div class="select-vehicle__item" data-form="form3">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truck-shipping.svg" alt="Truck shipping">
               <hr>
               <div class="select_vehicle_title">Truck</div>
            </div>
            <div class="select-vehicle__item" data-form="form3">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/forklift-shipping.svg" alt="Forklift shipping">
               <hr>
               <div class="select_vehicle_title">Forklift</div>
            </div>
            <div class="select-vehicle__item" data-form="form2">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/snowmobile-shipping.svg" alt="Snowmobile shipping">
               <hr>
               <div class="select_vehicle_title">Snowmobile</div>
            </div>
            <div class="select-vehicle__item" data-form="form3">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heavy-equipment-shipping.svg" alt="Heavy Equipment shipping">
               <hr>
               <div class="select_vehicle_title">Heavy Equipment</div>
            </div>
         </div>
         <div class="vehicle-shipping">

            <!-- Form1 - Car -->
            <div class="multi-step-form" id="form1">
               <!-- Add another (wrapper) -->
               <div class="temp-inputs">
                  <div class="selects-box">
                     <!-- Select year -->
                     <div class="select-wrapp">
                        <p class="label">Select year</p>
                        <div class="select-inp">
                           <input type="number" list="select_year-" name="select_year-" autocomplete="off" class="inp rule-select" required onclick="focus();old = value;" onmousedown = "value = '';">
                        </div>
                        <datalist id="select_year-" class="select_year"></datalist>
                     </div>
                     <!-- Select make -->
                     <div class="select-wrapp">
                        <p class="label">Select make</p>
                        <div class="select-inp">
                           <input type="text" list="list_make-" name="select_make-" id="select_make-" autocomplete="off" class="inp rule-select" required onclick="focus();old = value;" onmousedown = "value = '';">
                        </div>
                        <datalist id="list_make-"><?php getVehicles(); ?></datalist>
                     </div>
                     <!-- Select model -->
                     <div class="select-wrapp">
                        <p class="label">Select model</p>
                        <div class="select-inp">
                           <input type="text" list="select_model-" name="select_model-" autocomplete="off" class="inp rule-select" required onclick="focus();old = value;" onmousedown = "value = '';">
                        </div>
                        <datalist id="select_model-" class="select_model"></datalist>
                     </div>
                  </div>
                  <div class="remove-btn">
                     Remove
                  </div>
               </div>
               <form method="POST">
                  <input type="hidden" name="vehicle_type" value="">
                  <input type="hidden" name="form_type" value="form_type_1">
                  <!-- Step 1 -->
                  <?php require get_template_directory() . '/form-parts/step1-form1.php'; ?>

                  <!-- Step 2 -->
                  <?php require get_template_directory() . '/form-parts/step2.php'; ?>

                  <!-- Step 3 -->
                  <?php require get_template_directory() . '/form-parts/step3.php'; ?>
               </form>
            </div>
            <!-- Form2 - ATV/UTV, Motorcycle, Snowmobile  -->
            <div class="multi-step-form" id="form2">
               <!-- Add another (wrapper) -->
               <div class="temp-inputs">
                  <p class="label">Year make and model</p>
                  <input type="text" name="vehicle_all-" autocomplete="off" class="inp" required>
                  <div class="remove-btn">
                     Remove
                  </div>
               </div>
               <form method="POST">
                  <input type="hidden" name="vehicle_type" value="">
                  <input type="hidden" name="form_type" value="form_type_2">
                  <!-- Step 1 -->
                  <?php require get_template_directory() . '/form-parts/step1-form2.php'; ?>

                  <!-- Step 2 -->
                  <?php require get_template_directory() . '/form-parts/step2.php'; ?>

                  <!-- Step 3 -->
                  <?php require get_template_directory() . '/form-parts/step3.php'; ?>
               </form>
            </div>

            <!-- Form3 - Boat and Other  -->
            <div class="multi-step-form" id="form3">
               <!-- Add another (wrapper) -->
               <div class="temp-inputs">
                  <p class="label">Year make and model</p>
                  <input type="text" name="vehicle_all-" autocomplete="off" class="inp" required>
                  <div class="inputs-size">
                     <div class="inputs-size__item">
                        <p class="label">Length</p>
                        <div class="form3-item-inputs">
                           <input type="number" name="length_ft-" autocomplete="off" class="inp" placeholder="Ft" required>
                           <input type="number" name="length_in-" autocomplete="off" class="inp" placeholder="In" required>
                        </div>
                     </div>
                     <div class="inputs-size__item">
                        <p class="label">Width</p>
                        <div class="form3-item-inputs">
                           <input type="number" name="width_ft-" autocomplete="off" class="inp" placeholder="Ft" required>
                           <input type="number" name="width_in-" autocomplete="off" class="inp" placeholder="In" required>
                        </div>
                     </div>
                     <div class="inputs-size__item">
                        <p class="label">Height</p>
                        <div class="form3-item-inputs">
                           <input type="number" name="height_ft-" autocomplete="off" class="inp" placeholder="Ft" required>
                           <input type="number" name="height_in-" autocomplete="off" class="inp" placeholder="In" required>
                        </div>
                     </div>
                     <div class="inputs-size__item">
                        <p class="label">Weigth</p>
                        <div class="form3-item__last">
                           <input type="number" name="weigth_lbs-" autocomplete="off" class="inp" placeholder="Lbs" required>
                        </div>
                     </div>
                  </div>
                  <div class="remove-btn">
                     Remove
                  </div>
               </div>

               <form method="POST">
                  <input type="hidden" name="vehicle_type" value="">
                  <input type="hidden" name="form_type" value="form_type_3">
                  <!-- Step 1 -->
                  <?php require get_template_directory() . '/form-parts/step1-form3.php'; ?>

                  <!-- Step 2 -->
                  <?php require get_template_directory() . '/form-parts/step2.php'; ?>

                  <!-- Step 3 -->
                  <?php require get_template_directory() . '/form-parts/step3.php'; ?>
               </form>
            </div>
            
         </div>
      </div>
   </div>
</div>


<?php get_footer(); ?>