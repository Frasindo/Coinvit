<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 May 2019 09:27:44 +0000.
 */

namespace Coinvit;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Token
 * 
 * @property string $id_token
 * @property string $name
 * @property float $decimal
 * @property string $icon
 * @property int $id_blockchain
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Coinvit\Blockchain $blockchain
 * @property \Coinvit\TokenStatistic $token_statistic
 *
 * @package Coinvit
 */
class Token extends Eloquent
{
	protected $table = 'token';
	protected $primaryKey = 'id_token';
	public $incrementing = false;

	protected $casts = [
		'decimal' => 'float',
		'id_blockchain' => 'int'
	];

	protected $hidden = [
		'id_token'
	];

	protected $fillable = [
		'name',
		'decimal',
		'icon',
		'id_blockchain'
	];

	public function blockchain()
	{
		return $this->belongsTo(\Coinvit\Blockchain::class, 'id_blockchain');
	}

	public function token_statistic()
	{
		return $this->hasOne(\Coinvit\TokenStatistic::class, 'id_token');
	}
}
