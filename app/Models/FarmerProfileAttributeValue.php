<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerProfileAttributeValue
 * 
 * @property int $id
 * @property int $farmer_id
 * @property int $farmer_profile_attribute_id
 * @property string|null $value_string
 * @property float|null $value_number
 * @property Carbon|null $value_date
 * @property bool|null $value_boolean
 * @property array|null $value_json
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerProfileAttributeValue extends Model
{
	protected $table = 'farmer_profile_attribute_values';

	protected $casts = [
		'farmer_id' => 'int',
		'farmer_profile_attribute_id' => 'int',
		'value_number' => 'float',
		'value_date' => 'datetime',
		'value_boolean' => 'bool',
		'value_json' => 'json',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'farmer_id',
		'farmer_profile_attribute_id',
		'value_string',
		'value_number',
		'value_date',
		'value_boolean',
		'value_json',
		'updated_by'
	];
}
