<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$noticias=simplexml_load_file("http://www.teletica.com/rss/9nacionales.xml");
//print_r( $noticias)
foreach ($noticias->channel->item as $registro){
	echo $registro-> title."<br/>";
	echo $registro-> description."<br/>";
	echo '<a href="'.$registro->link.'"target="_blank"> Ver mas </a> <p> ';
	
	}

?>

</body>
</html>