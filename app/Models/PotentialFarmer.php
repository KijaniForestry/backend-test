<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PotentialFarmer
 * 
 * @property int $id
 * @property string $full_name
 * @property string|null $phone_number
 * @property string|null $existing_group_name
 * @property int|null $first_meeting_id
 * @property string $registration_status
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PotentialFarmer extends Model
{
	protected $table = 'potential_farmers';

	protected $casts = [
		'first_meeting_id' => 'int'
	];

	protected $fillable = [
		'full_name',
		'phone_number',
		'existing_group_name',
		'first_meeting_id',
		'registration_status',
		'notes'
	];
}
