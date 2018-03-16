// $("#signup-btn").click(function(){
	
// });

function onInvisibleSubmit(token) {
	// $("");
	
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

	if (token == "") {
		validation = false;
		grecaptcha.reset();
	}

	if (!validation){return;}

	showloading();

	$.ajax({
		url: baseURL + 'user/b_signup',
		data: {
			email: user_email,
			password: user_password,
			cpassword: confirm_password,
			token: token
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
}




// var onInvisibleSubmit = function(){
//         grecaptcha.render("emplacementRecaptcha",{
//             "sitekey": "YOUR_RECAPTCHA_SITEKEY_HERE",
//             "badge": "inline",
//             "type": "image",
//             "size": "invisible",
//             "callback": onSubmit
//         });
//     };
//     var onSubmit = function(token){
//         var userEmail = $("#userEmail").val();
//         var userPassword = $("#userPassword").val();
//         var userTfaOtp = $("#userTfaOtp").val();
//         $.ajax({
//             type: "POST",
//             url: location.href,
//             data:{
//                     userEmail: userEmail,
//                     userPassword: userPassword,
//                     userTfaOtp: userTfaOtp,
//                     userJetonRecaptcha: token
//                 },
//             dataType: "json",
//                 beforeSend: function(){
//                     $("#statutConnexion").html("Traitement de votre requête d'authentification en cours...");
//                 },
//                 success: function(response){
//                     $("#statutConnexion").html(response.Message);
//                     if(response.Victoire){
//                         $("#formulaireConnexion").slideUp();
//                         window.location.replace("/compte");
//                     }
//                     else{
//                         grecaptcha.reset();
//                     }
//                 },
//                 error: function(){
//                     $("#statutConnexion").html("La communication avec le système d'authentification n'a pas pu être établie. Veuillez réessayer.");
//                     grecaptcha.reset();
//                 }
//         });
//     };
//     function validate(event){
//         event.preventDefault();
//         $("#statutConnexion").html("Validation de votre épreuve CAPTCHA en cours...");
//         grecaptcha.execute();
//     }
//     function onload(){
//         var element = document.getElementById("boutonConnexion");
//         element.onclick = validate;
//     }