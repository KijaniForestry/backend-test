<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerProfileTemplateField
 * 
 * @property int $id
 * @property int $template_id
 * @property string $field_name
 * @property string $field_type
 * @property bool $required
 * @property string|null $options
 * @property string|null $validation_rules
 * @property string|null $description
 * @property int $display_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $label
 *
 * @package App\Models
 */
class FarmerProfileTemplateField extends Model
{
	protected $table = 'farmer_profile_template_fields';

	protected $casts = [
		'template_id' => 'int',
		'required' => 'bool',
		'display_order' => 'int'
	];

	protected $fillable = [
		'template_id',
		'field_name',
		'field_type',
		'required',
		'options',
		'validation_rules',
		'description',
		'display_order',
		'label'
	];
}
