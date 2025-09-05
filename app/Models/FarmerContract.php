<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerContract
 * 
 * @property int $id
 * @property string $title
 * @property int $farmer_id
 * @property int $garden_id
 * @property string|null $land_owner_first_name
 * @property string|null $land_owner_last_name
 * @property string|null $land_owner_other_name
 * @property string|null $beneficiary_first_name
 * @property string|null $beneficiary_last_name
 * @property string|null $witness_name
 * @property string|null $photos
 * @property Carbon|null $sign_date
 * @property Carbon|null $contract_end
 * @property int|null $staff_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerContract extends Model
{
	protected $table = 'farmer_contracts';

	protected $casts = [
		'farmer_id' => 'int',
		'garden_id' => 'int',
		'sign_date' => 'datetime',
		'contract_end' => 'datetime',
		'staff_id' => 'int'
	];

	protected $fillable = [
		'title',
		'farmer_id',
		'garden_id',
		'land_owner_first_name',
		'land_owner_last_name',
		'land_owner_other_name',
		'beneficiary_first_name',
		'beneficiary_last_name',
		'witness_name',
		'photos',
		'sign_date',
		'contract_end',
		'staff_id'
	];
}
