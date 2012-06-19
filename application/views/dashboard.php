<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>
</head>

<body>
<?= form_open('blog/viewpost')?>
<h1><center> Welcome to Dashboard </center></h1>
<table><central><strong><tr><td>
 <?= anchor('blog/addpost','Create a new Post')?> </td> 
<td> <?= anchor('blog/trash','Trash')?> </td></tr></strong></central></table>

<?php foreach($query->result() as $row):?>

<table><center><tr><td><h3> <?= $row->id?>.<?= $row->title?></h3></td>
<td><?= anchor('blog/viewpost/'.$row->id,'View')?></td>
<td><?= anchor('blog/editpost/'.$row->id,'Edit')?></td>
<td><?= anchor('blog/delete','Delete')?></td></tr>
<hr>

<?php endforeach ?>



</body>
</html>
