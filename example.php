<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Example Captcha</title>
  </head>
  <body>
    <form method = "POST" >
		<div id="ae_captcha_api"></div>
		<div><input type="text" placeholder = "Enter Captcha" name="user_input"/></div>
		<div><input type="submit" formaction="./validate.php" value = "Submit"/></div>
	</form>
	<script src="./captcha-generator/asset/main.js"></script>
  </body>
</html>
