<?php echo form_open('user/input_user'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr>
		<td>User ID</td>
		<td><?php echo form_input('id', '',array('placeholder' => 'id')); ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('username', '',array('placeholder' => 'username')); ?></td>		
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo form_input('email', '',array('placeholder' => 'email')); ?></td>		
	</tr>
	<tr>
		<td colspan="2">
			<?php echo form_submit('SUBMIT','SIMPAN DATA');?>
			<?php echo anchor('user','KEMBALI');?>
		</td>
	</tr>

</table>
<?php echo form_close();?>

</body>
</html>
