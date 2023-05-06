<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class student
 * @package App\Models
 * @version May 3, 2023, 4:33 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $attendances
 * @property \Illuminate\Database\Eloquent\Collection $class1s
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 * @property string $address
 * @property string $grade
 */
class student extends Model
{


    public $table = 'student';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'dateofbirth',
        'address',
        'grade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'dateofbirth' => 'date',
        'address' => 'string',
        'grade' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'dateofbirth' => 'nullable',
        'address' => 'nullable|string|max:50',
        'grade' => 'nullable|string|max:2'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function attendances()
    {
        return $this->hasMany(\App\Models\Attendance::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function class1s()
    {
        return $this->belongsToMany(\App\Models\Class1::class, 'enrollment');
    }
	
	public function __toString()
	{
		return "student#" . $this->id;
	}
}
