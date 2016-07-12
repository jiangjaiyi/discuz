<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/discuz/index.php/Admin/File/upload" enctype="multipart/form-data" method="post" >
	<input type="text" name="name" />
	<input type="file" name="image[]" multiple />
	<input type="submit" value="提交" >
	</form>
</body>
</html>