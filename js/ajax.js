
$(document).ready(function(){
	$('#tabela').empty(); 
	$.ajax({
		type:'post',		
		dataType: 'json',	
		url: 'controller/precificacao.php',
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				$('#tabela').append('<tr><td>'+dados[i].nome+'</td><td>'+dados[i].nome+'</td><td>'+dados[i].email+'</td></tr>');
			}
		}
	});
});