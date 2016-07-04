$( document ).ready( function(){	

	$( ".ajaxform" ).submit( function(){
		
		var fb_name = $( '#fb_name' ).val(),
			fb_email = $( '#fb_email' ).val(),
			fb_site = $( '#fb_site' ).val(),
			fb_message = $( '#fb_message' ).val(),
			MessagData = 'fb_name=' + fb_name +
						'&fb_email=' + fb_email +
						'&fb_site=' + fb_site +
						'&fb_message=' + fb_message;


		if( fb_name == '' ){
			alert ( 'Введите пожалуйста Ваше имя!' );
			return false;
		}
		if( fb_email == '' ){
			alert ( 'Введите пожалуйста Ваш адрес!' );
			return false;
		}
		if( fb_message == '' ){
			alert ( 'Введите пожалуйста текст сообщения!' );
			return false;
		}
		
		$.ajax( {
			type: 'POST',
			url: 'ajax/mail.php',
			data: MessagData,
			success: function(data){
			            
			           $( ".fb-ajax-popup" ).show( 500 ).delay( 3000 ).animate( { opacity: '0' }, 1000 );
			           $( ".ajaxform" ).trigger( "reset" ).removeClass( "ajaxform" ).addClass( "emptyform" );
			           $( ".go-message" ).css( { "background-color": "#b1b49a", color: "#cdb894" } );
			           $( ".form-group input" ).css( { "border-color": "#b1b49a" } );
			           $( ".form-group textarea" ).css( { "border-color": "#b1b49a" } );
			           $( ".go-message" ).attr( "onClick", "this.disabled=true;" );
			        }			
		} );

		return false;
	} );
  
} );