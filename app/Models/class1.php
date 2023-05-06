<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class class1
 * @package App\Models
 * @version May 3, 2023, 4:33 pm UTC
 *
 * @property \App\Models\Teacher $teacher
 * @property \Illuminate\Database\Eloquent\Collection $attendances
 * @property \Illuminate\Database\Eloquent\Collection $students
 * @property string $name
 * @property string $subject
 * @property integer $teacher_id
 */
class class1 extends Model
{


    public $table = 'class1';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'subject',
        'teacher_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'subject' => 'string',
        'teacher_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:30',
        'subject' => 'nullable|string|max:30',
        'teacher_id' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function teacher()
    {
        return $this->belongsTo(\App\Models\Teacher::class, 'teacher_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function attendances()
    {
        return $this->hasMany(\App\Models\Attendance::class, 'class1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function students()
    {
        return $this->belongsToMany(\App\Models\Student::class, 'enrollment');
    }
	
	public function __toString()
	{
		return "class#" . $this->id;
	}
}
