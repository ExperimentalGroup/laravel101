<?php

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = array('first_name', 'middle_name', 'last_name', 'role_id');

	public function role()
	{
		return $this->belongsTo('Role');
	}
}
