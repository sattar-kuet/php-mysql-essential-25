<!DOCTYPE html>
<html>
<head>
	<title>Link2</title>
</head>
<body>
<h2> Link2 </h2>
<?php $url_params = urlencode('sattar&');?>
<a href="all_links/profile.php?id=10&name=<?php echo $url_params;?>">Profile </a>
</body>
</html>