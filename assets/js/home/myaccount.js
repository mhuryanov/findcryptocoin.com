var sidebar_toggle_btn = $(".myaccount .myaccount-content .myaccount-content-header .sidebar-toggle-btn");
var sidebar = $(".myaccount .sidebar");
var myaccount_content = $(".myaccount .myaccount-content");


sidebar_toggle_btn.click(function(){
	var classes = sidebar.attr('class');
	if(classes.includes("collapsed")){
		sidebar.removeClass("collapsed");
		myaccount_content.removeClass("collapsed");

	} else{
		sidebar.addClass("collapsed");
		myaccount_content.addClass("collapsed");
	}
});

$(".myaccount .sidebar .menu-item").click(function(){
	$(".myaccount .sidebar .menu-item").removeClass('active');
	$(this).addClass('active');

	$(".myaccount-content-item").removeClass('active');
	var selectedId = $(this).data('item-name');
	$("#" + selectedId).addClass('active');
	
});

$("#save-firstname-btn").click(function(){
	var firstname = $("#firstname-input").val();

	$.ajax({
		url : baseURL + 'user/b_save_firstname',
		data: {
			firstname: firstname
		},
		type: 'post'
	});
});

$("#save-lastname-btn").click(function(){
	var lastname = $("#lastname-input").val();

	$.ajax({
		url : baseURL + 'user/b_save_lastname',
		data: {
			lastname: lastname
		},
		type: 'post'
	});
});

$("#save-email-btn").click(function(){
	var email = $("#email-input").val();

	$.ajax({
		url : baseURL + 'user/b_save_email',
		data: {
			email: email
		},
		type: 'post'
	});
});

$("#save-username-btn").click(function(){
	var username = $("#username-input").val();

	$.ajax({
		url : baseURL + 'user/b_save_username',
		data: {
			username: username
		},
		type: 'post'
	});
});

$("#save-phone-btn").click(function(){
	var phone = $("#phone-input").val();

	$.ajax({
		url : baseURL + 'user/b_save_phone',
		data: {
			phone: phone
		},
		type: 'post'
	});
});