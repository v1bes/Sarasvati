<!DOCTYPE html>
<html lang="de" class="no-js">
<?php setlocale(LC_TIME, "de_DE"); ?>
	<head>
		<!-- meta -->
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>

		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/main.css" />

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
		<!-- includes -->
		<?php include(\ProcessWire\wire('files')->compile('php/functions.inc',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
	</head>
	<body>

		<!-- Vielleicht später für Front-end editing
		< ?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
-->
	</body>
</html>
