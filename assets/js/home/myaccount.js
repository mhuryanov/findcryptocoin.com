var sidebar_toggle_btn = $(".myaccount .myaccount-content .myaccount-content-header .sidebar-toggle-btn");
var sidebar = $(".myaccount .sidebar");
var myaccount_content = $(".myaccount .myaccount-content");
sidebar_toggle_btn.click(function(){
	console.log(sidebar.attr('class'));

	var classes = sidebar.attr('class');
	if(classes.includes("collapsed")){
		sidebar.removeClass("collapsed");
		myaccount_content.removeClass("collapsed");

	} else{
		sidebar.addClass("collapsed");
		myaccount_content.addClass("collapsed");
	}

});