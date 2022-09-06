<?php
$text = '';
if ( isset($_GET['send']) ) {
	$text = $_GET['text'];
	print_r($text);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Przydatne techniki</title>
	<link rel="stylesheet" href="semantic.min.css">
	<link rel="stylesheet" href="custom.css">
</head>
<body>
	<div class="ui container content">
		<div class="top">
			<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="ui form">
			<div class="field">
				<label for="">Tekst</label>
				<input type="text" name="text">
				<input type="submit" class="ui primary button" name="send" value="Wyślij">
			</div>
			</form>
		</div>
	</div>
</body>
</html>