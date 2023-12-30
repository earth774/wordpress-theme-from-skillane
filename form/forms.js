		(function ($) {
			"use strict";
			var $document = $(document),
				$window = $(window),
				forms = {
				contactForm: $('#contactForm'),
				questionForm: $('#questionForm'),
				bookingForm: $('#bookingForm'),
				requestForm: $('#requestForm')
			};
			$document.ready(function () {
				
				// datepicker
				if ($('.datetimepicker').length) {
					$('.datetimepicker').datetimepicker({
						format: 'DD/MM/YYYY',
						ignoreReadonly: true,
						icons: {
							time: 'icon icon-clock',
							date: 'icon icon-calendar2',
							up: 'icon icon-top',
							down: 'icon icon-bottom',
							previous: 'icon icon-left',
							next: 'icon icon-right',
							today: 'icon icon-tick',
							clear: 'icon icon-close',
							close: 'icon icon-close'
						}
					});
				}
				if ($('.timepicker').length) {
					$('.timepicker').datetimepicker({
						format: 'LT',
						ignoreReadonly: true,
						icons: {
							time: 'icon icon-clock',
							up: 'icon icon-top',
							down: 'icon icon-bottom',
							previous: 'icon icon-left',
							next: 'icon icon-right'
						}
					});
				}
								
				// contact page form
				if (forms.contactForm.length) {
					var $contactform = forms.contactForm;
					$contactform.validate({
						rules: {
							name: {
								required: true,
								minlength: 2
							},
							message: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}
						},
						messages: {
							name: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							message: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							email: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "form/process-contact.php",
								success: function success() {
									$('.successform', $contactform).fadeIn();
									$contactform.get(0).reset();
								},
								error: function error() {
									$('.errorform', $contactform).fadeIn();
								}
							});
						}
					});
				}
				// question form
				if (forms.questionForm.length) {
					var $questionForm = forms.questionForm;
					$questionForm.validate({
						rules: {
							name: {
								required: true,
								minlength: 2
							},
							messages: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}
						},
						messages: {
							name: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							message: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							email: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: {
									'action': 'save_asktheexpert',
									'_wpnonce': requestforms._wpnonce,
									'name': $('input[name=name]').val(),
									'email': $('input[name=email]').val(),
									'phone': $('input[name=phone]').val(),
									'message': $('input[name=message]').val()
								},
								url: requestforms.ajaxurl,
								success: function success() {
									$('.successform', $questionForm).fadeIn();
									$questionForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $questionForm).fadeIn();
								}
							});
						}
					});
				}
				
				// booking form
				if (forms.bookingForm.length) {
					var $bookingForm = forms.bookingForm;
					$bookingForm.validate({
						rules: {
							bookingname: {
								required: true,
								minlength: 2
							},
							bookingmessages: {
								required: true,
								minlength: 20
							},
							bookingemail: {
								required: true,
								email: true
							}
						},
						messages: {
							bookingname: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							bookingmessage: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							bookingemail: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: {
									'action': 'saveappoinment',
									'_wpnonce': requestforms._wpnonce,
									'bookingname': $('input[name=bookingname]').val(),
									'bookingemail': $('input[name=bookingemail]').val(),
									'bookingphone': $('input[name=bookingphone]').val(),
									'bookingage': $('input[name=bookingage]').val(),
									'bookingservice': $('select[name=bookingservice]').val(),
									'bookingdate': $('input[name=bookingdate]').val(),
									'bookingtime': $('input[name=bookingtime]').val(),
									'bookingmessage': $('input[name=bookingmessage]').val(),
								},
								url: requestforms.ajaxurl,
								success: function success() {
									$('.successform', $bookingForm).fadeIn();
									$bookingForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $bookingForm).fadeIn();
								}
							});
						}
					});
				}
				
				// request form
				if (forms.requestForm.length) {
					var $requestForm = forms.requestForm;
					$requestForm.validate({
						rules: {
							requestname: {
								required: true,
								minlength: 2
							},
							requestmessages: {
								required: true,
								minlength: 20
							},
							requestemail: {
								required: true,
								email: true
							}
						},
						messages: {
							requestname: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							requestmessage: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							requestemail: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data:  {
									'action': 'save_request',
									'_wpnonce': requestforms._wpnonce,
									'requestname': $('input[name=requestname]').val(),
									'requestemail': $('input[name=requestemail]').val(),
									'requestphone': $('input[name=requestphone]').val(),
									'requestservice': $('input[name=requestservice]').val(),
									'requestdate': $('input[name=requestdate]').val(),
									'requesttime': $('input[name=requesttime]').val(),
								},
								url: requestforms.ajaxurl,
								success: function success(data) {
									if(data.success == 'yes'){
										alert("Your data has saved");
									}
									
									$('.successform', $requestForm).fadeIn();
									$requestForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $requestForm).fadeIn();
								}
							});
						}
					});
				}
			
			});
			
		})(jQuery);