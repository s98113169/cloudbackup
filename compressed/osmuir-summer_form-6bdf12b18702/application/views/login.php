<?php $this->load->view('header'); ?>
	<h1>Login</h1>
	<?php echo validation_errors() ?>

	<?php echo form_open('verifylogin') ?>
		<label for="username">登入名稱:</label>
		<input type="text" size="20" id="username" name="username">
		<br>
		<label for="password">密碼:</label>
		<input type="password" size="20" id="password" name="password">
		<br>
		<input type="submit" value="Login">
	</form>

<?php $this->load->view('footer'); ?>