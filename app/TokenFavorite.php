<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 May 2019 03:40:08 +0000.
 */

namespace Coinvit;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TokenFavorite
 * 
 * @property int $id_tf
 * @property string $id_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Coinvit\Token $token
 *
 * @package Coinvit
 */
class TokenFavorite extends Eloquent
{
	protected $table = 'token_favorite';
	protected $primaryKey = 'id_tf';

	protected $hidden = [
		'id_token'
	];

	protected $fillable = [
		'id_token'
	];

	public function token()
	{
		return $this->belongsTo(\Coinvit\Token::class, 'id_token');
	}
}
