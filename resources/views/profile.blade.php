@extends('app')
@section('content')

<h2>Foody - Profile</h2>

	<?= '<span style="color:red">' . Session::get('login_error') . '</span>' ?>

	<?php echo Session::get('notify') ? 
		"<p style='color:green'>" . Session::get('notify') . "</p>" : "" ?>

	<h1>Welcome <?php echo $user->username ?></h1>

	<p>Your email: <?php echo $user->email ?></p>
	<p>Your account was created on: 
	<?php echo $user->created_at ?></p>

	<p><a href="<?= URL::to('profile-edit') ?>">
				Edit your information</a></p>
@stop