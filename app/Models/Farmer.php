<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Farmer
 * 
 * @property int $id
 * @property int|null $registered_by_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $potential_farmer_id
 * @property bool $is_institution
 * @property string|null $farmer_photo
 * @property string|null $gender
 * @property string $status
 * @property string $first_name
 * @property string $last_name
 * @property string|null $other_name
 * @property int|null $phone
 * @property int|null $phone2
 * @property bool $has_national_id
 * @property int|null $r_group_id
 * @property int|null $r_pc_id
 * @property int|null $r_farmer_id
 * @property Carbon|null $registered_date
 * @property int|null $r_registered_by
 * @property string|null $deleted_at
 * @property string|null $r_phone
 * @property Carbon|null $dob
 *
 * @package App\Models
 */
class Farmer extends Model
{
	use SoftDeletes;
	protected $table = 'farmers';

	protected $casts = [
		'registered_by_id' => 'int',
		'potential_farmer_id' => 'int',
		'is_institution' => 'bool',
		'phone' => 'int',
		'phone2' => 'int',
		'has_national_id' => 'bool',
		'r_group_id' => 'int',
		'r_pc_id' => 'int',
		'r_farmer_id' => 'int',
		'registered_date' => 'datetime',
		'r_registered_by' => 'int',
		'dob' => 'datetime'
	];

	protected $fillable = [
		'registered_by_id',
		'potential_farmer_id',
		'is_institution',
		'farmer_photo',
		'gender',
		'status',
		'first_name',
		'last_name',
		'other_name',
		'phone',
		'phone2',
		'has_national_id',
		'r_group_id',
		'r_pc_id',
		'r_farmer_id',
		'registered_date',
		'r_registered_by',
		'r_phone',
		'dob'
	];
}
