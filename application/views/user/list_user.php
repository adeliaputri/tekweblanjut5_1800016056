<?php echo $title; ?>
<?php echo anchor('user/input_user','INPUT DATA USER');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr>
<h2>Data yang di simpan </h2>
<table border="1">
	<tr>
		<th>User ID</th>
		<th>Nama</th>
		<th>Email</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	foreach ($user as $b) {
		echo "<tr>
				<td>$b->id</td>
				<td>$b->username</td>
				<td>$b->email</td>
				<td>".anchor('user/edit_user/'.$b->id,'EDIT')."</td>
				<td>".anchor('user/delete_user/'.$b->id,'DELETE')."</td>
				</tr>";
		}
		?>
	
</table>

</body>
</html>
