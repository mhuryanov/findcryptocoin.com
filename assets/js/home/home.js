$("#buy-now-btn").click(function(){
	
	var coin_amount = $("#coin-amount-input").val();
	var coin_name = $("#selected-coin-button").html();
	if(coin_amount == "" || coin_amount < 0){
		alert("Please Input valied ammount");
		return;
	}
	$("#modal-coin-amount-input").val("You are buying " + coin_amount + " " + coin_name);
	$("#wallet-detail").fadeIn("slow");

});

$("#wallet-close-x").click(function(){
	$("#wallet-detail").fadeOut("slow");
	
});

$(".coin-item").click(function(){
	var coin_name = $(this).data('coin-name');
	var coin_id = $(this).data('coin-id');
	$("#selected-coin-button").html(coin_name);
	$("#selected-coin-button").data('coin-id', coin_id);
});