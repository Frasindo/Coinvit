<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 May 2019 09:29:05 +0000.
 */

namespace Coinvit;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TokenStatistic
 * 
 * @property int $id_statistic
 * @property string $id_token
 * @property float $volume
 * @property float $change
 * @property float $price
 * @property float $price_low
 * @property float $price_high
 * @property float $spread
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Coinvit\Token $token
 *
 * @package Coinvit
 */
class TokenStatistic extends Eloquent
{
	protected $table = 'token_statistic';
	protected $primaryKey = 'id_statistic';

	protected $casts = [
		'volume' => 'float',
		'change' => 'float',
		'price' => 'float',
		'price_low' => 'float',
		'price_high' => 'float',
		'spread' => 'float'
	];

	protected $hidden = [
		'id_token'
	];

	protected $fillable = [
		'id_token',
		'volume',
		'change',
		'price',
		'price_low',
		'price_high',
		'spread'
	];

	public function token()
	{
		return $this->belongsTo(\Coinvit\Token::class, 'id_token');
	}
}
