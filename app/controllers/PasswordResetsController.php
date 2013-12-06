<?php 

class PasswordResetsController extends BaseController {

	public function create() {
		return View::make('password_resets.create');
	}

	public function store() {
		Password::remind(['email' => Input::get('email')]);

		$status = Session::has('error') ? 'Counld not find user with that email' : 'please check your email';
		return Redirect::route('password_resets.create')->withStatus($status);
	}

	public function postReset() {
		$creds = [
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation'),
		];

		return Password::reset($creds, function($user, $password) {
			$user->password = Hash::make($password);
			$user->save();

			return Redirect::route('users.login');
		});
	}
	public function reset($token) {
		return View::make('password_resets.reset')->withToken($token);
	}
}