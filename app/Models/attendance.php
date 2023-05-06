<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class attendance
 * @package App\Models
 * @version May 3, 2023, 4:33 pm UTC
 *
 * @property \App\Models\Student $student
 * @property \App\Models\Class1 $class1
 * @property integer $student_id
 * @property integer $class1_id
 * @property string $date1
 * @property boolean $present
 */
class attendance extends Model
{


    public $table = 'attendance';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'student_id',
        'class1_id',
        'date1',
        'present'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'class1_id' => 'integer',
        'date1' => 'date',
        'present' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'nullable|integer',
        'class1_id' => 'nullable|integer',
        'date1' => 'nullable',
        'present' => 'nullable|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function class1()
    {
        return $this->belongsTo(\App\Models\Class1::class, 'class1_id');
    }
	
	
	
}
