$(document).ready(function(){
	function actualiser(){
		$.get('http://192.168.1.1/courrier_local/access_deny/verifier', function(data, status){
			if(data.length > 10) window.location.href = 'http://192.168.1.1/courrier_local/';
		});
	}

	setInterval(actualiser, 100);
});