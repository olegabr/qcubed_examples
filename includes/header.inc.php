<?php require('examples.inc.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php _p(QApplication::$EncodingType); ?>" />
		<title><?php _p(MyExamples::PageName(), false); ?> - QCubed PHP 5 Development Framework - Examples</title>
		<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__ . '/styles.css', false); ?>"></link>
		<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __EXAMPLES__ . '/includes/examples.css', false); ?>"></link>
	</head>
	<body>
		<header>
			<div class="breadcrumb">
<?php		if(!isset($mainPage) && is_numeric(MyExamples::GetCategoryId())) { ?>
				<span class="category-name"><?php _p((MyExamples::GetCategoryId() + 1) . '. ' . MyExamples::$Categories[MyExamples::GetCategoryId()]['name'], false); ?></span> / 
<?php		} ?>
				<strong class="page-name"><?php _p(MyExamples::PageName(), false); ?></strong>
			</div>
			
<?php	if(!isset($mainPage)) { ?>
			<nav class="page-links"><?php _p(MyExamples::PageLinks(), false); ?></nav>
<?php	} ?>
			
		</header>
		<section id="content">