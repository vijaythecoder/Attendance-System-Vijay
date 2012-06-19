<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Post</title>
</head>

<body>
<?php foreach($res as $dat):
{
$title=$dat->title;
$body=$dat->body;

	}
	endforeach
?>
<?= form_open('blog/updatepost/'.$id)?>
<table><table>
<tr><td> Title: </td>
<td> <?= form_input('heading',$title)?> </td></tr>
<tr><td> Body: </td>
<td> <?= form_textarea('description',$body)?> </td></tr>
<tr><td> <?= form_submit('submit','Edit Post!')?> </td>
<td><?= form_reset('reset','Reset') ?><td></tr>
<?= $str = "</div></div>" ?>
<?= form_close($str)?>
</body>
</html>
