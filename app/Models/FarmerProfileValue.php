<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerProfileValue
 * 
 * @property int $id
 * @property int|null $profile_template_field_id
 * @property string|null $value
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property int|null $farmer_template_assignment_id
 * @property int|null $attribute_value_id
 *
 * @package App\Models
 */
class FarmerProfileValue extends Model
{
	protected $table = 'farmer_profile_values';
	public $timestamps = false;

	protected $casts = [
		'profile_template_field_id' => 'int',
		'updated_by' => 'int',
		'farmer_template_assignment_id' => 'int',
		'attribute_value_id' => 'int'
	];

	protected $fillable = [
		'profile_template_field_id',
		'value',
		'updated_by',
		'farmer_template_assignment_id',
		'attribute_value_id'
	];
}
