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