<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 20 May 2019 16:52:53 +0000.
 */

namespace Coinvit;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class DirectUser
 *
 * @property int $id
 * @property string $pk
 * @property \Carbon\Carbon $last_login
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package Coinvit
 */
class DirectUser extends Authenticatable
{
	use Notifiable;
	protected $table = 'direct_user';

	protected $dates = [
		'last_login'
	];

	protected $fillable = [
		'pk',
		'last_login',
	];
	protected $hidden = [
			'password', 'email',
	];
}
