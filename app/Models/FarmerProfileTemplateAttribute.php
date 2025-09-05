<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerProfileTemplateAttribute
 * 
 * @property int $id
 * @property int $template_id
 * @property int $attribute_id
 * @property bool $is_required
 * @property int $display_order
 * @property string|null $metadata
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerProfileTemplateAttribute extends Model
{
	protected $table = 'farmer_profile_template_attributes';

	protected $casts = [
		'template_id' => 'int',
		'attribute_id' => 'int',
		'is_required' => 'bool',
		'display_order' => 'int'
	];

	protected $fillable = [
		'template_id',
		'attribute_id',
		'is_required',
		'display_order',
		'metadata'
	];
}
