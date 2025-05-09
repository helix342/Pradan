<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Form
 * 
 * @property int $id
 * @property string $user_id
 * @property string $form_type
 * @property string $farmer_name
 * @property string $age
 * @property string $district
 * @property string $mobile_number
 * @property string $gender
 * @property string $taluk
 * @property string $firca
 * @property string|null $father_spouse
 * @property string|null $household_members
 * @property string $type_of_households
 * @property string $special_catog
 * @property string $caste
 * @property string $hh_occupation
 * @property string $type_of_house
 * @property string $drinking_water
 * @property string $potability
 * @property string $domestic_water
 * @property string $toilet_availability
 * @property string $toilet_cond
 * @property string $house_owner
 * @property string $household_education
 * @property string $identity_card_type
 * @property string $identity_card_number
 * @property string|null $hamlet
 * @property string|null $panchayat
 * @property string|null $lat
 * @property string|null $lon
 * @property string|null $block
 * @property string|null $mcode
 * @property string $status
 * @property string|null $verified_by
 * @property Carbon $created_at
 * @property string|null $remarks
 * 
 * @property Collection|BankDetail[] $bank_details
 *
 * @package App\Models
 */
class Form extends Model
{
	protected $table = 'forms';
	public $timestamps = false;

	protected $fillable = [
		'user_id',
		'form_type',
		'farmer_name',
		'age',
		'district',
		'mobile_number',
		'gender',
		'taluk',
		'firca',
		'father_spouse',
		'household_members',
		'type_of_households',
		'special_catog',
		'caste',
		'hh_occupation',
		'type_of_house',
		'drinking_water',
		'potability',
		'domestic_water',
		'toilet_availability',
		'toilet_cond',
		'house_owner',
		'household_education',
		'identity_card_type',
		'identity_card_number',
		'hamlet',
		'panchayat',
		'lat',
		'lon',
		'block',
		'mcode',
		'status',
		'verified_by',
		'remarks'
	];

	public function bankDetail() {
    return $this->hasOne(BankDetail::class, 'form_id');
}
	public function landForm() {
    return $this->hasOne(LandForm::class, 'form_id');
}

public function pondForm() {
    return $this->hasOne(PondForm::class, 'form_id');
}

public function plantForm() {
    return $this->hasOne(PlantForm::class, 'form_id');
}



}
