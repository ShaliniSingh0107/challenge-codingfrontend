<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Task</title>
</head>
<body>
<div>Coding Challenge</div>
<br>
<?php
echo form_open('test/submitForm');
echo form_label('Select User :', 'users');
?>
<select name="users"  id="users">                                               
	<option value="">Select User</option>
	<?php  foreach ($data as $row) { ?>
	<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>   
	<?php } ?>
	</select>
	<br>
	<?php
echo "<br>";
echo form_label('Title :', 'title');
$data= array(
'type' => 'text',
'name' => 'title',
'id' => 'title',
'placeholder' => 'Please Enter Title'
);
echo form_input($data);
echo "<br><br>";
echo form_label('Body:', 'body');
$data= array(
'type' => 'text',
'name' => 'body',
'id' => 'body',
'placeholder' => 'Please Enter Body'
);
echo form_input($data);
echo "<br>";
?>
</div>
<br><br>
<div id="form_button">
<?php
$data = array(
'type' => 'submit',
'value'=> 'Submit'
);
echo form_submit($data); ?>
</div>
<?php echo form_close();?>
</body>
</html>