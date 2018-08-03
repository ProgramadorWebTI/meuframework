<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
	/*font-family: 'Open Sans', sans-serif;
	font-family: 'Roboto', sans-serif;*/
	body{
		font-family: 'Open Sans', sans-serif !important;
	}
	</style>
	<title>Template</title>
</head>
<body> <br>
<div class="container">

	<?php $this->loadViewTemplate($viewName, $viewData);?>

</div>
</body>
</html>