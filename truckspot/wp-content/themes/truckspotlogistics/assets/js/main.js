jQuery(document).ready(function($){

	// Fixed menu
	$(window).scroll(function(){
		var headerFixed = $('.header-fixed');
		var scroll = $(window).scrollTop();

		if (scroll >= 50){
			headerFixed.addClass('fixed');
		} else{
			headerFixed.removeClass('fixed');
		}
	});


	// Menu header
	$(".header-menu li a").on("click", function(e){
		e.preventDefault();
		if ( !$(this).parent().hasClass('header-services') ) {
			var anchor = $(this).attr('href');
			if (anchor.startsWith('#')) {
				$('.burger-menu').removeClass('burger-menu-active');
				$('.header-menu').removeClass('header-menu-active');
				$('.header-fixed').removeClass('active');
				$('.header').removeClass('active');
				$('html, body').stop().animate({
					scrollTop: $(anchor).offset().top - 50
				}, 800);
			}
		}
	});


	$('.header-services').on("click", function(){
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.services-container').removeClass('active');
		} else {
			$(this).addClass('active');
			$('.services-container').addClass('active');
		}
	});


	$(document).mouseup(function (e){ // событие клика по веб-документу
		var servicesContainer = $('.services-container');
		var menuItem = $('.header-services');
		if (!servicesContainer.is(e.target) && servicesContainer.has(e.target).length === 0 && menuItem.has(e.target).length === 0) {
			menuItem.removeClass('active');
			servicesContainer.removeClass('active');
		}
	});


	// Click on burger-menu-START
	function menuClick() {
		this.classList.toggle('burger-menu-active');
		document.querySelector('.header-menu').classList.toggle('header-menu-active');
		document.querySelector('.header-fixed').classList.toggle('active');
		document.querySelector('.header').classList.toggle('active');
	}
	document.querySelector('.burger-menu').addEventListener('click', menuClick);
	// Click on burger-menu-END

	// Click on footer-item-START
	$('.footer-mobile__item h3').click(function(){
		var footerItem = $(this).parent().find('.footer-mobile-content');
		if (footerItem.hasClass('active')) {
			footerItem.removeClass('active');
		} else{
			footerItem.addClass('active');
		}
	});
	// Click on footer-item-END

	// Add element items in header-menu
	$('.services-menu li a').append('<span class="menu-icon"></span>');
	

	$('.logistics-slider').slick({
		autoplay: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		asNavFor: '.logistics-tabs',
	});

	$('.logistics-tabs').slick({
		autoplay: true,
		slidesToShow: 3,
		asNavFor: '.logistics-slider',
		focusOnSelect: true,
		swipe: false,
	});

	$('.customers-wrapper').slick({
		autoplay: true,
		slidesToShow: 3,
		responsive: [
		{
			breakpoint: 993,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1
			}
		},
		]
	});

	$('.popular-slider').slick({
		autoplay: true,
		slidesToShow: 3,
		responsive: [
		{
			breakpoint: 993,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1
			}
		},
		]
	});	


	// Offer
	if ( $('.offer-box .offer-item').length > 6 ) {
		$('.offer-wrapper').addClass('offer-wrapper-margin');
	}


	// Tabs
	$(".wrapper .tab").click(function() {
		$(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");


	// States and coordinates
	var listStates = {
		'Alabama' : '32.30088087947596, -86.9195999904495',
		'Alaska' : '64.16693631358814, -149.50241476656842',
		'Arizona' : '34.0302729061668, -111.13517613980518',
		'Arkansas' : '35.20685997816872, -91.84259061544432',
		'California' : '36.76797643681824, -119.46047995804527',
		'Colorado' : '39.574586024065475, -105.8914729205909',
		'Connecticut' : '41.58253511338076, -73.0881084365996',
		'Delaware' : '38.89950969376131, -75.52720305295927',
		'Florida' : '27.64613312565182, -81.5520549585497',
		'Georgia' : '32.19950354481999, -82.92233397070285',
		'Hawaii': '19.893721900721143, -155.583046847586',
		'Idaho' : '43.98505016782637, -114.71830668926',
		'Illinois' : '40.60188162937712, -89.47236810234462',
		'Indiana' : '39.79891918771623, -86.1355155666502',
		'Iowa' : '41.666744191926476, -91.5408602074752',
		'Kansas' : '39.03012548960764, -98.52936018243308',
		'Kentucky' : '37.86109904869091, -84.21311266091745',
		'Louisiana' : '30.673495229053398, -92.1893194849442',
		'Maine' : '45.38055760718622, -69.37811351306652',
		'Maryland' : '39.085350834537856, -76.64369965333135',
		'Massachusetts' : '42.389035506999406, -71.33394095642598',
		'Michigan' : '44.379854234729414, -85.69549327966885',
		'Minnesota' : '46.74687321662144, -94.71313857519593',
		'Mississippi' : '32.23832389642671, -89.36792967664373',
		'Missouri' : '37.94456472437905, -91.83381323748591',
		'Montana' : '46.86431406443816, -110.33128273166601',
		'Nebraska' : '41.488082286238836, -99.82012776024106',
		'Nevada' : '38.92522970135219, -116.41654517190453',
		'New Hampshire' : '43.23990888616258, -71.48149129179812',
		'New Jersey' : '40.04429879763126, -74.39434418358059',
		'New Mexico' : '34.534716844467205, -105.84456445286456',
		'New York' : '40.742736401478815, -73.99416375242109',
		'North Carolina' : '35.67255899781543, -79.02302820270572',
		'North Dakota' : '47.563038762171736, -100.98339321932336',
		'Ohio' : '40.42635775953849, -82.95089838154368',
		'Oklahoma' : '35.41487417675299, -97.66935569893731',
		'Oregon' : '43.649265504077334, -120.6476002883899',
		'Pennsylvania' : '41.14344751938371, -77.21995412616005',
		'Rhode Island' : '41.53438400849477, -71.43116227613453',
		'South Carolina' : '33.77871344812536, -81.10791899824105',
		'South Dakota' : '43.8810563704332, -99.87388261446625',
		'Tennessee' : '35.492244477650154, -86.57252203597562',
		'Texas' : '32.006468013713935, -99.92012892821465',
		'Utah' : '39.50193005404107, -110.88525586326584',
		'Vermont' : '44.27977553959725, -72.79906182498415',
		'Virginia' : '37.3833278883739, -78.64031923469459',
		'Washington' : '38.90393184791572, -76.97039727307461',
		'West Virginia' : '38.52675552513483, -80.52996777021195',
		'Wisconsin' : '43.62421543448316, -88.7477416339735',
		'Wyoming' : '43.14515505902999, -107.42449978611506',
	};


	// Append states to input form-map
	var listStatesKeys = Object.keys(listStates);
	for (var i = 0; i < listStatesKeys.length; i++) {
		$('.state_list').append('<option value="'+ listStatesKeys[i] +'">');
	}

	// Function distance between two points
	function distanceState(lat1, lon1, lat2, lon2) {
		var p = Math.PI / 180,
		c = Math.cos,
		a = 0.5 - c((lat2 - lat1) * p)/2 + c(lat1 * p) * c(lat2 * p) * (1 - c((lon2 - lon1) * p))/2,
 		result = 12742 * Math.asin(Math.sqrt(a)), // - km
 		result = Math.round(result * 0.621371), // - ml
  		// return result; // - ml
  		
  		// + 15%
  		procent = Math.round( (result / 100) * 15 );
  		return result + procent;
  	}
  	// console.log(distance(32.30088087947596, -86.9195999904495, 64.16693631358814, -149.50241476656842));


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


	// Click on button continue
	const distance = $('.distance span');
	const stateNameFrom = $('.state-name-from');
	const stateNameTo = $('.state-name-to');
	const namePointFrom = $('.name-point-from span');
	const namePointTo = $('.name-point-to span');


	$('.map_continue').click(function(){
		jQuery.validator.addClassRules("rule-select", {
			checkData: true
		});

		$('.form-map').validate({
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
				var inpFrom = $('input[name="state_from"]').val(),
				inpTo = $('input[name="state_to"]').val(),
				fromState = listStates[inpFrom].split(', '),
				latitude1 = fromState[0],
				longitude1 = fromState[1],
				toState = listStates[inpTo].split(', '),
				latitude2 = toState[0],
				longitude2 = toState[1],
				result = distanceState(latitude1, longitude1, latitude2, longitude2);
				distance.html(result);
				stateNameFrom.html(inpFrom);
				namePointFrom.html(inpFrom);
				stateNameTo.html(inpTo);
				namePointTo.html(inpTo);
				$('.map_chioce').fadeOut();
				$('.map_finish').css("display", "flex");

				return false;
			}
		});
	});

	// Click on button remove
	$('.name-state-remove').click(function(){
		$('.map_chioce').css("display", "flex");
		$('.map_finish').fadeOut();
		var stateInpName = $(this).attr('state-inp');
		$('.form-map input[name="'+stateInpName+'"]').val('');
	});


});