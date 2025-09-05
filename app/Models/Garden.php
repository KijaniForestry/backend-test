<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Garden
 * 
 * @property int $id
 * @property string $name
 * @property string|null $center_point
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $polygon
 * @property int $farmer_id
 * @property string $status
 * @property int|null $registered_by
 * @property string|null $r_center_point
 * @property string|null $r_status
 * @property int|null $r_group_id
 * @property int|null $r_farmer_id
 * @property string|null $deleted_at
 * @property int|null $r_id
 * @property Carbon|null $planted_date
 * @property int|null $season_id
 * @property int|null $r_total_trees
 * @property int|null $tree_count
 * @property Carbon|null $tree_count_updated_at
 * @property string|null $geom
 * @property string|null $centroid
 *
 * @package App\Models
 */
class Garden extends Model
{
	use SoftDeletes;
	protected $table = 'gardens';

	protected $casts = [
		'center_point' => 'binary',
		'polygon' => 'binary',
		'farmer_id' => 'int',
		'registered_by' => 'int',
		'r_center_point' => 'binary',
		'r_group_id' => 'int',
		'r_farmer_id' => 'int',
		'r_id' => 'int',
		'planted_date' => 'datetime',
		'season_id' => 'int',
		'r_total_trees' => 'int',
		'tree_count' => 'int',
		'tree_count_updated_at' => 'datetime',
		'geom' => 'binary',
		'centroid' => 'binary'
	];

	protected $fillable = [
		'name',
		'center_point',
		'polygon',
		'farmer_id',
		'status',
		'registered_by',
		'r_center_point',
		'r_status',
		'r_group_id',
		'r_farmer_id',
		'r_id',
		'planted_date',
		'season_id',
		'r_total_trees',
		'tree_count',
		'tree_count_updated_at',
		'geom',
		'centroid'
	];
}
