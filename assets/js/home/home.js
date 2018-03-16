$("#buy-now-btn").click(function(){
	$("#wallet-detail").fadeIn("slow");
	var coin_amount = $("#coin-amount-input").val();
	$("#modal-coin-amount-input").val(coin_amount);
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