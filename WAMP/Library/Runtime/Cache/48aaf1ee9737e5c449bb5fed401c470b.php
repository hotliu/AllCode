<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Library</title>
<link rel='stylesheet' type='text/css' href='__ROOT__/css/style.css'>
</head>
<body>
<h1>Library</h1>
<table class="tbl">
<tr><th>Name</th><th>E-mail</th><th>Edit</th><th>Log out</th></tr>
<tr><td><?php echo ($username); ?></td><td><?php echo ($email); ?></td><td>
<form method="POST" action="__URL__/edit">
	<input name="id" value="<?php echo ($id); ?>" type="hidden" /><input value="Edit my data" type="submit" />
</form>
</td><td><a href="__URL__/logout">Logout</a></td></tr>
</table>
<?php if($usertype == 0): ?><div>You have no rights to manage the books now, please wait for the authority from the super administrator.</div>
<?php elseif($usertype == 1): ?>
	<h3>Add a book</h3>
<?php else: ?>
	<h3>Borrowed books info</h3>
</body>
</html>