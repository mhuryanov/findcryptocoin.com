$("#signup-btn").click(function(){
	var user_email = $("#user-email").val();
	var user_password = $("#user-password").val();
	var confirm_password = $("#confirm-password").val();

	var validation = true;
	if(!validateEmail(user_email)){
		$("#user-email").addClass('validate-error-input');
		validation = false;
	} else{
		$("#user-email").removeClass('validate-error-input');
	}

	if(user_password == ""){
		$("#user-password").addClass('validate-error-input');
		validation = false;
	} else {
		$("#user-password").removeClass('validate-error-input');
	}

	if(user_password != confirm_password || confirm_password == ""){
		$("#confirm-password").addClass('validate-error-input');
		validation = false;	
	} else{
		$("#confirm-password").removeClass('validate-error-input');
	}

	if (!validation){return;}

	showloading();

	$.ajax({
		url: baseURL + 'user/b_signup',
		data: {
			email: user_email,
			password: user_password,
			cpassword: confirm_password
		},
		dataType: 'json',
		type: 'post'
	}).done(function(data){
		if(data.code == "success") {
			$("#signup-error-alert").hide();
			$("#signup-success-alert").show();
			$("#signup-success-alert .alert-data").html(data.message);

			setTimeout(function(){ window.location = baseURL + 'user/' }, 3000);
		} else {
			$("#signup-error-alert").show();
			$("#signup-success-alert").hide();
			$("#signup-error-alert .alert-data").html(data.message);
		}
	}).fail(function(){
		
	}).always(function(){
		hideloading();
	});
});