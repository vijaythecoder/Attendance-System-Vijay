<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Post</title>
</head>

<body>
<?= form_open('blog/insertpost')?>
<table><center><tr><td> Title: </td>
<td> <?= form_input('title','')?> </td></tr>
<tr><td> Body: </td>
<td> <?= form_textarea('body','')?> </td></tr>
<tr><td> <?= form_submit('submit','Submit Post!')?> </td>
<td><?= form_reset('reset','Reset') ?><td></tr>
<?= $str = "</div></div>" ?>
<?= form_close($str)?>
</body>
</html>