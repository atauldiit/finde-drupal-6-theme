$(document)
		.ready(
				function() {
					$("#forward-form #edit-submit")
							.click(
									function() {
										var error_message = '<ul>';
										var is_error = false;
										var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
										if ($("#forward-form #edit-name").val() == '') {
											error_message += '<li class="message-item">Bitte geben Sie Ihren Namen.</li>';
											is_error = true;
										}
										if (!filter.test($(
												"#forward-form #edit-email")
												.val())) {
											error_message += '<li class="message-item">Bitte geben Sie eine g&uuml;ltige E-Mail.</li>';
											is_error = true;
										}
										if ($(
												"#forward-form #edit-recipientname")
												.val() == '') {
											error_message += '<li class="message-item">Bitte geben Sie Name des Empf&auml;ngers.</li>';
											is_error = true;
										}
										if (!filter
												.test($(
														"#forward-form #edit-recipients")
														.val())) {
											error_message += '<li class="message-item">Bitte geben Sie eine g&uuml;ltige E-Mail-Empf&auml;nger.</li>';
											is_error = true;
										}

										error_message += '</ul>';
										if (is_error) {
											$("#tellform .messages").html(
													error_message);
											$("#tellform .messages").show();
											return false;
										}
									});
				});