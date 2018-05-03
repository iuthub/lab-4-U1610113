<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
		 <form action="/sucker.php" method="post">
		 	
             
             <?php
foreach ($_REQUEST as $param => $value) {
 ?>
  <dt><?= $param ?></dt>  <dd><?= $value ?></dd>
 <?php

$myfile = fopen("suckers.txt", "a+");
$txt = $value .  ";";
fwrite($myfile, $txt);
fclose($myfile);
}
$myfile = fopen("suckers.txt", "a+");
$tnt = "\n";
fwrite($myfile, $tnt);
fclose($myfile);
?>

		 </form>
		</dl>

<?php 
$allsuck = fopen("suckers.txt", "r");
while(!feof($allsuck)) {
  echo fgets($allsuck) . "<br>";
}
fclose($allsuck);
?>

	</body>
</html>  