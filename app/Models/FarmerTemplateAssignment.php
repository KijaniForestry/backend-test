<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerTemplateAssignment
 * 
 * @property int $id
 * @property int $farmer_id
 * @property int $template_id
 * @property Carbon|null $assigned_at
 * @property int|null $assigned_by
 * @property string $profile_template_status
 * @property int|null $season_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerTemplateAssignment extends Model
{
	protected $table = 'farmer_template_assignments';

	protected $casts = [
		'farmer_id' => 'int',
		'template_id' => 'int',
		'assigned_at' => 'datetime',
		'assigned_by' => 'int',
		'season_id' => 'int'
	];

	protected $fillable = [
		'farmer_id',
		'template_id',
		'assigned_at',
		'assigned_by',
		'profile_template_status',
		'season_id'
	];
}
