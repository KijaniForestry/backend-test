<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerProfileTemplate
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $conditional_logic
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $created_by
 *
 * @package App\Models
 */
class FarmerProfileTemplate extends Model
{
	protected $table = 'farmer_profile_templates';

	protected $casts = [
		'is_active' => 'bool',
		'created_by' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'conditional_logic',
		'is_active',
		'created_by'
	];
}
