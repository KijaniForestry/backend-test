<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FarmerPayment
 * 
 * @property int $id
 * @property int $farmer_id
 * @property int|null $farmer_group_id
 * @property string $status
 * @property float $amount
 * @property string|null $mobile_money_phone
 * @property string|null $payment_method
 * @property int|null $approved_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class FarmerPayment extends Model
{
	protected $table = 'farmer_payments';

	protected $casts = [
		'farmer_id' => 'int',
		'farmer_group_id' => 'int',
		'amount' => 'float',
		'approved_by' => 'int'
	];

	protected $fillable = [
		'farmer_id',
		'farmer_group_id',
		'status',
		'amount',
		'mobile_money_phone',
		'payment_method',
		'approved_by'
	];
}
