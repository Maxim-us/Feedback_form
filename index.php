<? header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
		<title>Feedback form</title>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<form class="fb_form ajaxform" id="form" method="post">
			<h3>Задать вопрос</h3>
			<span class="fb_title_input">Ваше имя *</span>
			<input type="text" id="fb_name" name="fb_name" class="fb_form_input" required />

			<span class="fb_title_input">Email *</span>
			<input type="email" id="fb_email" name="fb_email" class="fb_form_input" required />

			<span class="fb_title_input">Ваш сайт</span>
			<input type="text" id="fb_site" name="fb_site" class="fb_form_input" placeholder="http://example.com/" />

			<span class="fb_title_input">Сообщение *</span>
			<textarea id="fb_message" name="fb_message" class="fb_form_textarea" required></textarea>

			<span class="fb_form_span_submit">
				<button type="submit" id="form-submit" class="go-message fb_form_submit" >Отправить вопрос</button>	
			</span>
		</form>	

		<div class="fb-ajax-popup">
			<h6>Ваше письмо отправлено, спасибо</h6>
		</div>	

		<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="js/options.js"></script>			
		
	</body>
</html>