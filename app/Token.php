<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 May 2019 16:29:31 +0000.
 */

namespace Coinvit;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Token
 *
 * @property string $id_token
 * @property string $issuer
 * @property string $name
 * @property float $decimal
 * @property string $icon
 * @property string $desc
 * @property string $toml
 * @property int $id_blockchain
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Coinvit\Blockchain $blockchain
 * @property \Illuminate\Database\Eloquent\Collection $token_favorites
 * @property \Illuminate\Database\Eloquent\Collection $token_statistics
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
		'created_at',
		'issuer',
		'name',
		'decimal',
		'icon',
		'desc',
		'toml',
		'id_blockchain'
	];

	public function blockchain()
	{
		return $this->belongsTo(\Coinvit\Blockchain::class, 'id_blockchain');
	}

	public function token_favorites()
	{
		return $this->hasMany(\Coinvit\TokenFavorite::class, 'id_token');
	}

	public function token_statistics()
	{
		return $this->hasMany(\Coinvit\TokenStatistic::class, 'id_token');
	}
}
