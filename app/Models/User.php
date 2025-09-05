<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property int|null $phone2
 * @property int|null $phone
 * @property string|null $o_code
 * @property string|null $device_name
 * @property string|null $device_id
 * @property string|null $other_name
 * @property string|null $gender
 * @property int|null $employee_id
 * @property int|null $assignment_id
 * @property int|null $r_id
 * @property string|null $r_role
 * @property string|null $r_phone
 * @property Carbon|null $last_seen_at
 * @property string|null $profile_photo
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use HasFactory, Notifiable;

	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'phone2' => 'int',
		'phone' => 'int',
		'employee_id' => 'int',
		'assignment_id' => 'int',
		'r_id' => 'int',
		'last_seen_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'status',
		'email_verified_at',
		'remember_token',
		'phone2',
		'phone',
		'o_code',
		'device_name',
		'device_id',
		'other_name',
		'gender',
		'employee_id',
		'assignment_id',
		'r_id',
		'r_role',
		'r_phone',
		'last_seen_at',
		'profile_photo'
	];

	public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }
}
