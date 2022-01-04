jQuery(document).ready( function($){

	// Form add another vehicle
	function findMissing(arr) {
		var missing = [];
		for (var i = arr[0]; i <= arr[arr.length - 1]; i++) {
			if (arr.indexOf(i) == -1) missing.push(i);
		}
		return missing;
	}
	// console.log(findMissing([1, 2, 3, 5]));


	// Global array for vehile template
	var tempArr = [2, 3, 4, 5, 6];

	// Click on "Remove" in vehicle form
	$('body').delegate("div.remove-btn", "click", function(){
		var tempId = Number( $(this).parent().attr('temp-id') );
		tempArr.push(tempId);
		tempArr.sort();
		$(this).parent().remove();
	});

	// Form add another vehicle-END



	function	inputPhoneMask(){
		[].forEach.call( document.querySelectorAll('.inpPhone'), function(input) {
			var keyCode;
			function mask(event) {
				event.keyCode && (keyCode = event.keyCode);
				var pos = this.selectionStart;
				if (pos < 3) event.preventDefault();
				var matrix = "+1 (___)-___-____",
				i = 0,
				def = matrix.replace(/\D/g, ""),
				val = this.value.replace(/\D/g, ""),
				new_value = matrix.replace(/[_\d]/g, function(a) {
					return i < val.length ? val.charAt(i++) || def.charAt(i) : a
				});
				i = new_value.indexOf("_");
				if (i != -1) {
					i < 5 && (i = 3);
					new_value = new_value.slice(0, i)
				}
				var reg = matrix.substr(0, this.value.length).replace(/_+/g,
					function(a) {
						return "\\d{1," + a.length + "}"
					}).replace(/[+()]/g, "\\$&");
				reg = new RegExp("^" + reg + "$");
				if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
				if (event.type == "blur" && this.value.length < 5)  this.value = ""
			}

		input.addEventListener("input", mask, false);
		input.addEventListener("focus", mask, false);
		input.addEventListener("blur", mask, false);
		input.addEventListener("keydown", mask, false)

	});
	}
	inputPhoneMask();

	// Сlicking on select vehicle
	$('.select-vehicle__item').click(function(){

		// Variables
		const dataForm = $(this).attr('data-form');
		const selectVehicleTitle = $(this).find('.select_vehicle_title').text();
		const vehicleTitle = $('#vehicle_title');

		$('#'+dataForm+' input[name="vehicle_type"]').val(selectVehicleTitle);

		// Change the title
		vehicleTitle.text(selectVehicleTitle);

		// Add vehicle name
		$('.selected_transport').text(selectVehicleTitle)

		// Show the desired form
		$('#'+dataForm).fadeIn();

		// Initilization step-form 
		app.init(dataForm);

		// Hide select-vehicle
		$('.select-vehicle').fadeOut();

		// Remove other form
		$('.multi-step-form').not('#'+dataForm).remove();

		// If form3 - remove boat check_wrapper or other check_wrapper
		if (selectVehicleTitle == 'Boat') {
			$('.check_wrapper_other').remove();
		} else{
			$('.check_wrapper_boat').remove();
		}
	});


	// Focus select-input 
	$('.select-inp input').focus(function(){
		$(this).parent().addClass('active');
	});
	// Focusout select-input 
	$('.select-inp input').focusout(function(){
		$(this).parent().removeClass('active');
	});


	// Datepicker
	function datePickerStart() {
		var dateClass = ".datepicker";

		$(dateClass).datepicker({
			minDate: 0,
			onSelect: function(date){
				$('.datepicker_value').val(date);
				$(dateClass).fadeOut();
			}
		});

		$(dateClass).datepicker("setDate", $('.datepicker_value').val());

		function shipDate(){
			var inpShipDate = $('input[name="ship_date"]:checked');
			if ( inpShipDate.attr('id') == 'specific_date') {
				$(dateClass).fadeIn();
			} else{
				$(dateClass).fadeOut();
			}
		}
		shipDate();

		$('input[name="ship_date"]').change(function(){
			shipDate();
		});

		$('.date-item').click(function(){
			$(dateClass).fadeIn();
		});

		$(document).mouseup(function (e){
			var formDate = $(dateClass);
			if (!formDate.is(e.target) && formDate.has(e.target).length === 0 && $('.date-item')) {
				formDate.fadeOut();
			}
		});
	}
	datePickerStart();
	// Datepicker-END


	// Steps form
	var app = {

		init: function(parentId){
			this.cacheDOM(parentId);
			this.setupAria();
			this.nextButton();
			this.addButton();
			this.prevButton();
			this.validateForm();
			this.killEnterKey();
		},

		cacheDOM: function(parentId){
			if($("#" + parentId).size() === 0){ return; }
			this.$formParent = $("#" + parentId);
			this.$form = this.$formParent.find("form");
			this.$formStepParents = this.$form.find(".step-block"),
			this.$nextButton = this.$form.find(".btn-next");
			this.$addButton = this.$form.find(".add_btn");
			this.$prevButton = this.$form.find(".btn-prev");
		},

		htmlClasses: {
			activeClass: "active",
			hiddenClass: "hidden",
			visibleClass: "visible",
			animatedVisibleClass: "animated fadeIn",
			animatedHiddenClass: "animated fadeOut",
			animatingClass: "animating"
		},

		setupAria: function(){

		// set first parent to visible
		this.$formStepParents.eq(0).attr("aria-hidden",false);

		// set all other parents to hidden
		this.$formStepParents.not(":first").attr("aria-hidden",true);

		// handle aria-expanded on next/prev buttons
		app.handleAriaExpanded();

	},

	nextButton: function(){

		this.$nextButton.on("click", function(e){

			e.preventDefault();

			// grab current step and next step parent
			var $this = $(this),
			currentParent = $this.closest(".step-block"),
			nextParent = currentParent.next();

					// if the form is valid hide current step
					// trigger next step
					if(app.checkForValidForm()){

						if ( $this.hasClass('zip_btn_next') ) {
							const inputZip1 = $('#zip1');
							const inputZip1Data = inputZip1.val().split(' : ');
							const inputZip2 = $('#zip2');
							const inputZip2Data = inputZip2.val().split(' : ');
							
							function functionZip1(callback) {
								$('#form_loader').addClass('active');
								var checkCity = {
									action: 'check_city',
									data: inputZip1Data,
								};
								jQuery.post( myPlugin.ajaxurl, checkCity).done(function(data){
									if (data == true) {
										inputZip1.removeClass('error-text');
										callback();
									} else{
										inputZip1.addClass('error-text');
										$('#form_loader').removeClass('active');
									}
								});
							}

							function functionZip2(callback) {
								var checkCity = {
									action: 'check_city',
									data: inputZip2Data,
								};
								jQuery.post( myPlugin.ajaxurl, checkCity).done(function(data){
									if (data == true) {
										inputZip2.removeClass('error-text');
										callback();
									} else{
										inputZip2.addClass('error-text');
										$('#form_loader').removeClass('active');
									}
								});
							}

							function functionZipCheck() {
								if (!inputZip1.hasClass('error-text')) {
									functionZip2(functionZipCheck2);
								}
							}

							function functionZipCheck2() {
								if (!inputZip2.hasClass('error-text')) {
									$('#form_loader').removeClass('active');
									currentParent.removeClass(app.htmlClasses.visibleClass);
									app.showNextStep(currentParent, nextParent);
								}
							}

							functionZip1(functionZipCheck);

						} else {
							currentParent.removeClass(app.htmlClasses.visibleClass);
							app.showNextStep(currentParent, nextParent);
						}
					}

				});
	},

	addButton: function(){
		this.$addButton.on("click", function(e){

			e.preventDefault();

			var tempInputs = $(this).closest(".multi-step-form").find('.temp-inputs:first-child');
			tempInputs = tempInputs.clone();
			var tempContainer = $(this).closest(".multi-step-form").find('.temp-container');
			var tempQuantity = tempContainer.find('.temp-inputs');
			
			if ( tempQuantity.length < 5 ) {
				tempInputs.attr('temp-id', tempArr[0]);
				tempInputs.find('input').each(function(){

					// Name
					var inpName = $(this).attr('name');
					$(this).attr('name', inpName + tempArr[0]);

					// Id
					if ( $(this).attr('id') ) {
						var inpId = $(this).attr('id');
						$(this).attr('id', inpId + tempArr[0]);
					}

					// List
					if ( $(this).attr('list') ) {
						var inpList = $(this).attr('list');
						$(this).attr('list', inpList + tempArr[0]);
					}
				});

				// Datalist
				tempInputs.find('datalist').each(function(){
					var datalistId = $(this).attr('id');
					$(this).attr('id', datalistId + tempArr[0]);
				});

				tempInputs.appendTo(tempContainer);

				if ($(this).closest(".multi-step-form").attr('id') == 'form1') {
					selectMake('#select_make-'+tempArr[0], '#select_model-'+tempArr[0]);
				}

				tempArr.splice(0, 1);

			} else{
				alert('Sorry, this is the maximum');
			}

		});

	},

	prevButton: function(){

		this.$prevButton.on("click", function(e){

			e.preventDefault();

			// grab current step parent and previous parent
			var $this = $(this),
			currentParent = $(this).closest(".step-block"),
			prevParent = currentParent.prev();

					// hide current step and show previous step
					// no need to validate form here
					currentParent.removeClass(app.htmlClasses.visibleClass);
					app.showPrevStep(currentParent, prevParent);

				});
	},

	showNextStep: function(currentParent,nextParent){

		// hide previous parent
		currentParent
		.addClass(app.htmlClasses.hiddenClass)
		.attr("aria-hidden",true);

		// show next parent
		nextParent
		.removeClass(app.htmlClasses.hiddenClass)
		.addClass(app.htmlClasses.visibleClass)
		.attr("aria-hidden",false);

		// focus first input on next parent
		nextParent.focus();

		// handle aria-expanded on next/prev buttons
		app.handleAriaExpanded();

	},

	showPrevStep: function(currentParent,prevParent){

		// hide previous parent
		currentParent
		.addClass(app.htmlClasses.hiddenClass)
		.attr("aria-hidden",true);

		// show next parent
		prevParent
		.removeClass(app.htmlClasses.hiddenClass)
		.addClass(app.htmlClasses.visibleClass)
		.attr("aria-hidden",false);

		// send focus to first input on next parent
		prevParent.focus();

		// handle aria-expanded on next/prev buttons
		app.handleAriaExpanded();

	},

	handleAriaExpanded: function(){

		$.each(this.$nextButton, function(idx,item){
			var controls = $(item).attr("aria-controls");
			if($("#"+controls).attr("aria-hidden") == "true"){
				$(item).attr("aria-expanded",false);
			}else{
				$(item).attr("aria-expanded",true);
			}
		});

		$.each(this.$prevButton, function(idx,item){
			var controls = $(item).attr("aria-controls");
			if($("#"+controls).attr("aria-hidden") == "true"){
				$(item).attr("aria-expanded",false);
			}else{
				$(item).attr("aria-expanded",true);
			}
		});

	},

	validateForm: function(){

			// Checking the value in select-input
			jQuery.validator.addMethod("checkData", function(value, element) {
				var list = $(element).attr('list');
				var datalistOptions = $('#'+list+' option');
				var datalistArr = [];
				for (var i = 0; i < datalistOptions.length; i++) {
					datalistArr[i] = $(datalistOptions[i]).val();
					if (value == $(datalistOptions[i]).val()) {
						return true;
					}
				}
				return false;
			});

			// Checking the value in move-input
			jQuery.validator.addMethod("checkMove", function(value, element) {
				var expression = new RegExp('^[0-9]{5} [:]{1} [A-Z]{1}');
				if (expression.test(value)) {
					return true;
				}
				return false;
			});

			// Checking the value in phone-input
			jQuery.validator.addMethod("checkPhone", function(value, element) {
				var phoneInp = new RegExp('^[+]{1}[1]{1} [(]{1}[0-9]{3}[)]{1}[-]{1}[0-9]{3}[-]{1}[0-9]{4}$');
				if (phoneInp.test(value)) {
					return true;
				}
				return false;
			});

			jQuery.validator.addClassRules("rule-select", {
				checkData: true
			});

		// jquery validate form validation
		this.$form.validate({
			rules: {
				pickup_city: {
					checkMove: true
				},
				delivery_city: {
					checkMove: true
				},
				phone: {
					checkPhone: true
				},
			},
			ignore: ":hidden", // any children of hidden desc are ignored
			errorElement: "span", // wrap error elements in span not label
			errorClass: "error-text", // Sarah added error class to span
			errorPlacement: function(error, element) {  // Sarah added to insert before to work better with radio buttions
				if(element.attr("type") == "radio") {
					error.insertBefore(element);
				}
				else{
					error.insertAfter(element);
				}
			},

			invalidHandler: function(event, validator){ // add aria-invalid to el with error
				$.each(validator.errorList, function(idx,item){
					if(idx === 0){
						$(item.element).focus(); // send focus to first el with error
					}
					$(item.element).attr("aria-invalid",true); // add invalid aria
				})
			},
			submitHandler: function(form) {
				var data = {
					action: 'form_submit',
					data: $(form).serialize(),
				};
				jQuery.post( myPlugin.ajaxurl, data, function(response){
					$('.form-success').fadeIn();
					setTimeout(function(){
						location.reload();
						window.scrollTo(0, 0);
					}, 4000);
				} );

				return false;
			}
		});
	},

	checkForValidForm: function(){
		if(this.$form.valid()){
			return true;
		}
	},

	killEnterKey: function(){
		$(document).on("keypress", ":input:not(textarea,button)", function(event) {
			return event.keyCode != 13;
		});
	},
};


// Select year
for (var i = 2021; i >= 1850; i--) {
	$('.select_year').append('<option value="'+ i +'">'+ i +'</option>');
}

// Select inputs
function selectMake(idSelect, idModel){
	$(idSelect).change(function(){
		var selectMake = $(this).val();
		var inpDatalist = $(idModel);

		var data = {
			action: 'select_model',
			model: selectMake,
		}

		jQuery.post( myPlugin.ajaxurl, data, function( response ){
			inpDatalist.html(response);
		} );
	});
}

selectMake('#select_make-1', '#select_model-1');



// Origin & Destination
$('.zip_inp').keyup(function() {
	var inpDatalist = $('#'+$(this).attr('list'));
	var zip_list = '';
	zip_list = $(this).val();

	if ( $(this).val().length > 1 ) {
		var data = {
			action: 'search_city',
			zip_list: zip_list,
		};

		jQuery.post( myPlugin.ajaxurl, data, function( response ){
			inpDatalist.html(response);
		} );
	}
});


} );




