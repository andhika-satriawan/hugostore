// JavaScript Document
(function($) {
    "use strict";
	
	$(document).on("change", "input:radio[name='wc_rb_select_service']", function(e) {
		$('.wc_rb_mb_customer').removeClass('displayNone');
	});

	$(document).on("click", "[dt_device_id]", function(e) {
		e.preventDefault();

		var $theDeviceId = $(this).attr('dt_device_id');
		$(this).parent().closest('ul').find('.selected').removeClass("selected");
		$(this).addClass('selected');
		
		$('.wc_rb_mb_services').removeClass('displayNone');

		var $wc_rb_mb_device_submit = $("#wc_rb_mb_device_submit").val();

		$.ajax({
			type: 'POST',
			data: {
				'action': 'wc_rb_update_services_list',
				'theDeviceId': $theDeviceId, 
				'theBrandNonce': $wc_rb_mb_device_submit 
			},
			url: ajax_obj.ajax_url,
			dataType: 'json',

			beforeSend: function() {
				$('.service-message').html("<div class='loader'></div>");
			},
			success: function(response) {
				//console.log(response);
				var message 		= response.message;
				$('#wcrb_thedevice_id').val($theDeviceId);
				$('.service-message').html('<div data-closable="slide-out-right">'+message+'</div>');
			}
		});
	});

	$('[dt_brand_id]').on("click", function(e) {
		e.preventDefault();

		var $theBrandId = $(this).attr('dt_brand_id');
		$(this).parent().closest('ul').find('.selected').removeClass("selected");
		$(this).addClass('selected');
		
		var $wc_rb_mb_device_submit = $("#wc_rb_mb_device_submit").val();
		
		$.ajax({
			type: 'POST',
			data: {
				'action': 'wc_rb_mb_update_devices',
				'theBrandId': $theBrandId, 
				'theBrandNonce': $wc_rb_mb_device_submit 
			},
			url: ajax_obj.ajax_url,
			dataType: 'json',

			beforeSend: function() {
				$('.device-message').html("<div class='loader'></div>");
			},
			success: function(response) {
				//console.log(response);
				var message 		= response.message;
				$('#wcrb_thebrand_id').val($theBrandId);
				$('.device-message').html('<div data-closable="slide-out-right">'+message+'</div>');
			}
		});
	});

	$("form[name='wc_rb_device_form']").on("submit", function(e) {
		e.preventDefault();
		var $form 	= $(this);
		var formData = $form.serialize();
		var $perform_act = "wc_rb_submit_booking_form";

		$.ajax({
			type: 'POST',
			data: formData + '&action='+$perform_act,
			url: ajax_obj.ajax_url,
			dataType: 'json',

			beforeSend: function() {
				$('.booking_message').html("<div class='loader'></div>");
			},
			success: function(response) {
				//console.log(response);
				var message = response.message;
				var success = response.success;
				
				if(success == "YES" ) {
					$('.final_customer_message').html('<div class="callout success" data-closable="slide-out-right">'+message+'</div>');
				} else {
					$('.booking_message').html('<div class="callout success" data-closable="slide-out-right">'+message+'</div>');
				}
			}
		});
	});

	$( document ).ready(function(e) {
		if( $('#auto_submit_status').length ) {
			$( "form[data-async]" ).submit();
		}
	});  

	$("form[data-async]").on("submit",function(e) {
	  	e.preventDefault();

	  	var $form 	= $(this);
	  	var $target = $($form.attr('data-target'));

	  	var formData = $form.serialize();
		var $input = $(this).find("input[name=form_type]");

		if($input.val() == "wc_request_quote_form") {
			var $perform_act = "wc_cr_submit_quote_form";	
		} else if($input.val() == "wc_create_new_job_form") {
			var $perform_act = "wc_cr_create_new_job";
		} else {
			var $perform_act = "wc_cmp_rep_check_order_status";	
		}

		$.ajax({
			type: $form.attr('method'),
			data: formData + '&action='+$perform_act,
			url: ajax_obj.ajax_url,
			dataType: 'json',

			beforeSend: function() {
				$('.form-message').html("<div class='spinner is-active'>Loading ...</div>");
			},
			success: function(response) {
				//console.log(response);
				var message 		= response.message;
				var success 		= response.success;
				var reset_select2 	= response.reset_select2;

				$('.form-message').html('<div class="callout success" data-closable="slide-out-right">'+message+'</div>');
				
				if(success == "YES") {
					$form.trigger("reset");	
				
					if(reset_select2 == "YES") {
						$("#customer, #rep_devices").val(null).trigger('change');
					}
				}
			}
		});
	});
})(jQuery); //jQuery main function ends strict Mode on