<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>forgehe.com | A shitty website made by a shitty person. WIP</title>

	<?php 
	$metaKeywords = 'website, project, others';
	require('includes/head.html'); 
	?>
</head>


<body>
	<?php
		$navBar['otherStuff'] = 'active';
		require('includes/header.html');
		require('includes/body-otherStuff.html');
		require('includes/footer.html');
	?>
</body>
</html>