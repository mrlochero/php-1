<form name='register' action='' method='POST'>
	<?php echo form_input("username",set_value('username')); ?>
	<div> <?php form_error('username');?> </div>
	<?php echo form_label('nhập mật khẩu: ').form_password("password",set_value('password')); ?>
	<?php echo form_label('nhập lại mật khẩu: ').form_password("password2",set_value('password2')); ?>
	<?php echo form_label('nhập email: ').form_input("email",set_value('email')); ?>
	<?php echo form_label('nhập name: ').form_submit("submit",'gửi'); ?>

	Tên đăng nhập: <input type="text" name="username" value="<?php
	echo set_value('username')?>">
	<div class="error" id="username_error"><?php echo
		form_error('username')?></div>


</form>
