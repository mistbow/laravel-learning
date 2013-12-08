<?php

class Topic extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
			'title' => 'required',
			'body' => 'required',
		);

	public static $errors;

	public static function isValid($data) 
	{
		
		$validation = Validator::make($data, static::$rules);

		if($validation->passes()) {
			return TRUE;
		} 

		static::$errors = $validation->messages();
		return FALSE;
		
	}
}
