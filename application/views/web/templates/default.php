<!doctype html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<meta charset="utf-8">
		<meta name="keywords" content="<?php echo $keywords;?>" />
  		<meta name="description" content="<?php echo $description;?>" />
        <?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type)), "\n"; }?>
	</head>
	
	<body>
		<?php echo $content;?>
	</body>
	
</html>