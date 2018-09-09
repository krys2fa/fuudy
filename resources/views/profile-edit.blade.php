<!DOCTYPE html>
	<html>
		<head>
			<title>Foody - Edit Profile</title>
			<meta charset="utf-8">
		</head>

		<body>

			<h2>Foody - Edit Profile</h2>

			<!-- <h2>Edit User Info</h2> -->
			<?php $messages = $errors->all('<p style="color:red">:message</p>') ?>

			<?php foreach ($messages as $msg): ?>
			<?= $msg ?>
			<?php endforeach; ?>

			<?= Form::open() ?>

			<?= Form::label('email', 'Email address: ') ?>
			<?= Form::text('email', $user->email) ?>
			<br>

			<?= Form::label('password', 'Password: ') ?>
			<?= Form::password('password') ?>
			<br>

			<?= Form::label('password_confirm', 'Retype Password: ') ?>
			<?= Form::password('password_confirm') ?>
			<br>

			<?= Form::label('username', 'Username: ') ?>
			<?= Form::text('username', $user->username) ?>

			<br>
			<?= Form::submit('Update!') ?>
			<?= Form::close() ?>

		</body>

	</html>