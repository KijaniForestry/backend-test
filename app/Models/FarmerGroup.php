<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerGroup
 * 
 * @property int $id
 * @property int $farmer_id
 * @property int $group_id
 * @property Carbon|null $joined_at
 * @property Carbon|null $left_at
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerGroup extends Model
{
	protected $table = 'farmer_groups';

	protected $casts = [
		'farmer_id' => 'int',
		'group_id' => 'int',
		'joined_at' => 'datetime',
		'left_at' => 'datetime'
	];

	protected $fillable = [
		'farmer_id',
		'group_id',
		'joined_at',
		'left_at',
		'status'
	];
}
