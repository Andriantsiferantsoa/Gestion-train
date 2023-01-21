	$(document).ready(function(){
	$(".amis").click(function(){
		var id = $(this).attr("id");
		$("#courant").html(id);
		$(".online").attr('class', '');
		$(this).parent().attr('class', 'online new');
	});

	function actualiser(){
		var player = document.querySelector('#player');
		if(parseInt(player.currentTime) > 0.1)
		{
			player.pause();
			player.currentTime = 0;
		}
		var exp = $("#exp").html();
		var dest = $("#courant").html();
		var url = 'http://192.168.1.1/courrier_local/communication/ajax_get_sms/' + exp + '/' + dest;
		$.getJSON(url, function(data, status){
			$("#chat-messages-inner").html('');
	        for (var i = data.length - 1; i >= 0; i--) {
	        	var text = '<p id="msg-1" class="user-linda" style="display: block;">'+
	        	'<span class="msg-block"><strong>'+data[i].exp+'</strong> <span class="time">- '+
	        	data[i].dateEnvoi+'</span>'+
	        	'<span class="msg">'+data[i].contenu+'</span></span></p>';
	        	$("#chat-messages-inner").append(text);
	        }
	        if($("#chat-messages-inner").html() == '')$("#chat-messages-inner").html('Aucune conversation');
    	});
		url = 'http://192.168.1.1/courrier_local/communication/ajax_get_non_lu/' + $(".exp").html();
    	$.get(url, function(data, status){
			if(data.length > 10) window.location.href = 'http://192.168.1.1/courrier_local/access_deny';
			else{
				var ancien = $("#nb").html();
				$("#nb").html(data);
				if(ancien == '')
				{
					refresh();
				}
				else if(ancien < data)
				{
					refresh();
					$.notify("Vous avez reçu un nouveau message !","info");
					var player = document.querySelector('#player');
					player.play();
				}
			}

    	});


    	/**/

    	
	}

	$("#envoyer").click(function(){
		var msg = $("#msg-box").val();
		var exp = $("#exp").html();
		var dest = $("#courant").html();
		var url = 'http://192.168.1.1/courrier_local/communication/nouveau/' + exp + '/' + dest;
		if(msg == '') return;
		else{
			$.post(url,{
		        contenu: msg
			    }, function(data, status){
						});
			$("#msg-box").val('');
			}
	});

	$("#msg-box").focus(function(){
		$('#badge' + $(".new").attr('ana')).html("");
		var exp = $("#exp").html();
		var dest = $("#courant").html();
		var url = 'http://192.168.1.1/courrier_local/communication/vue/' + exp + '/' + dest;
		$.get(url, function(data, status){
		});
	});


	function recuperer_nb(nandefa, courant)
	{
		$.get('http://192.168.1.1/courrier_local/communication/ajax_get_non_lu_indiv/'+nandefa+'/'+courant, function(data, status){
			if(data != 0)
			{
				$('#badge'+nandefa).html(data);
			}
    	});
	}

	function refresh()
	{
		var exp = document.querySelectorAll(".amis");
		for (var i = exp.length - 1; i >= 0; i--) {
			pseudo = exp[i].getAttribute('id');
			recuperer_nb(pseudo, $("#exp").html());
		}
	}

	setInterval(actualiser, 100);
	/*refresh();*/

	//recuperer_nb('bernadette', 'andry');

	
});