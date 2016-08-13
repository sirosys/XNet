var Lock = function() {

	return {
		//main function to initiate the module
		init: function() {

			$("#usrPass").focus();

			$('.lock-form').validate({
				errorElement: 'span', //default input error message container
				errorClass: 'help-block', // default input error message class
				focusInvalid: false, // do not focus the last invalid input
				rules: {
					usrPass: {
						required: true
					}
				},

				messages: {
					usrPass: {
						required: "Password is required."
					}
				},

				invalidHandler: function() { //display error alert on form submit   
					$("#result").text("Password harus diisi");
				},

				highlight: function(element) { // hightlight error inputs
					$(element)
						.closest('.form-group').addClass('has-error'); // set error class to the control group
				},

				success: function(label) {
					label.closest('.form-group').removeClass('has-error');
					label.remove();
				},

				errorPlacement: function(error, element) {
					error.insertAfter(element.closest('.input-icon'));
				},

				submitHandler: function(form) {
					$.ajax({
						type: 'POST',
						url: 'auth',
						data: $('.lock-form').serialize(), 

						beforeSend: function(){
							$("#submit").attr("disabled", true).text("Proses");
						},

						error: function (result, status, err) {
							console.log(err);
							$("#submit").attr("disabled", false).text("lock");
							$("#result").html(err);
						},

						success : function (data, textStatus, jqXHR){
							console.log(jqXHR);
							$("#result").text(jqXHR.statusText);
							window.location.href = "./home";
						}

					});
				}

			});

			$('.lock-form input').keypress(function(e) {
				if (e.which == 13) {
					if ($('.lock-form').validate().form()) {
						$('.lock-form').submit(); //form validation success, call ajax form submit
					}
					return false;
				}
			});

		}

	};

}();