$(document).ready(function(e) {
	function highlight_red(e) {
		e.css({'background-color': '#FFF2F2'});
		$('.submit').attr('value', 'Špatný formát!');
		$('.submit').css({'color': '#C02942'});
		setTimeout(function (){
			$('.submit').attr('value', 'Odeslat');
			$('.submit').removeAttr('style');
		}, 1000);
	}

	$('form').submit(function(e) {
		e.preventDefault();

		$('form').children('input:visible').removeAttr('style');
		
		var name = $(this).children("input[name='name']");
		var phone = $(this).children("input[name='phone']");
		var email = $(this).children("input[name='email']");
		var comments = $(this).children("textarea[name='comments']");
		
		var error = false;
		
		if (name.val() == "") {
			highlight_red(name);
			error = true;
		}

		if ((phone.val().length != 9) && (phone.val().length != 13)) {
			highlight_red(phone);
			error = true;
		}
		if(((phone.val().charAt(0) < '0') || (phone.val().charAt(0) > '9')) && (phone.val().charAt(0) != '+')) {
			highlight_red(phone);
			error = true;
		}
		var i;
		for(i=1; i<phone.val().length; i++){
			if((phone.val().charAt(i) < '0') || (phone.val().charAt(i) > '9')) {
				highlight_red(phone);
				error = true;
			}
		}

		var atpos=email.val().indexOf('@');
		var dotpos=email.val().lastIndexOf(".");
		if ((atpos < 1) || (dotpos < (atpos + 2)) || ((dotpos + 2) >= email.val().length)) {
			highlight_red(email);
			error = true;
  		}
  		
  		if (error == true) return;
  		else $('.submit').attr('value', 'Odesílám...');
	  	
		var dataString = 'name=' + name.val()
					   + '&email=' + email.val()
					   + '&phone=' + phone.val()
					   + '&comments=' + comments.val();
		
		$.ajax({
			type: 'POST',
			url: 'scripts/contact_form.php',
			data: dataString,
			success: function(data) {
				$('.submit').attr('value', 'Odesláno');
				setTimeout(function (){ $('.submit').removeAttr('style'); $('.submit').attr('value', 'Odeslat'); }, 1000);
			},
			error: function(jqXHR, err, ex){
				$('.submit').attr('value', 'Chyba!');
			}
		});
		e.unbind();
    });

});