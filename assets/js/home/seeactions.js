$('#seeaction_list_table').DataTable();


$(".action-up-btn").click(function(){
	var action_id = $(this).data('action-id');

	$.ajax({
		url: baseURL + 'user/b_action_add',
		data: {action_id: action_id},
		type: 'post',
		dataType: 'json'
	}).done(function(data){
		$(".action-counter-" + action_id).html(data.action_counter);
	}).fail(function(){
		alert('failed');
	});
});


$(".action-down-btn").click(function(){
	var action_id = $(this).data('action-id');

	$.ajax({
		url: baseURL + 'user/b_action_down',
		data: {action_id: action_id},
		type: 'post',
		dataType: 'json'
	}).done(function(data){
		$(".action-counter-" + action_id).html(data.action_counter);
	}).fail(function(){
		alert('failed');
	});
});