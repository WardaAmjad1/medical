
$('#btn').click(function(){

	var names=$('#name').val();
	var homenos=$('#homeno').val();
	var complains=$('#complains').val();



$.ajax({
	method:'POST',
	url:save,
	data:{name:names,homeno:homenos,complain:complains,_token:token},
	success :function (data){
		console.log(data);
		// body...
	}
});
});