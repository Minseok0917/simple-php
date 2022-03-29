<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php view('template/header'); ?>
	<?php
		if( isView(_path) ){
			view(_path);
		}else{
			view('pages/home');
		}
	?>
	<?php view('template/footer'); ?>
</body>
</html>