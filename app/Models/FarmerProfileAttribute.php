<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerProfileAttribute
 * 
 * @property int $id
 * @property string $name
 * @property string $label
 * @property string|null $description
 * @property int|null $data_type_id
 * @property string|null $validation
 * @property string|null $reference_model
 * @property string|null $display_field
 * @property string|null $value_field
 * @property string|null $additional_fields
 * @property string|null $ui_component
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerProfileAttribute extends Model
{
	protected $table = 'farmer_profile_attributes';

	protected $casts = [
		'data_type_id' => 'int'
	];

	protected $fillable = [
		'name',
		'label',
		'description',
		'data_type_id',
		'validation',
		'reference_model',
		'display_field',
		'value_field',
		'additional_fields',
		'ui_component'
	];
}
