<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 May 2019 09:27:33 +0000.
 */

namespace Coinvit;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Blockchain
 * 
 * @property int $id_blockchain
 * @property string $name
 * @property int $order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tokens
 *
 * @package Coinvit
 */
class Blockchain extends Eloquent
{
	protected $table = 'blockchain';
	protected $primaryKey = 'id_blockchain';

	protected $casts = [
		'order' => 'int'
	];

	protected $fillable = [
		'name',
		'order'
	];

	public function tokens()
	{
		return $this->hasMany(\Coinvit\Token::class, 'id_blockchain');
	}
}
