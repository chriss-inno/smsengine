<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $guarded = array("id");

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static $rules = array(
    'fname'=>'required|alpha|min:2',
    'lname'=>'required|alpha|min:2',
    'email'=>'required|email|unique:users',
    'phone'=>'required|Integer|Min:10',
    'role'=>'required',
    'sex'=>'required',
    'password'=>'required|min:8',
    'username'=>'required|unique:users'
    );

}
