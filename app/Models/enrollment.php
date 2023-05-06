<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class enrollment
 * @package App\Models
 * @version May 5, 2023, 10:33 pm UTC
 *
 * @property \App\Models\Student $student
 * @property \App\Models\Class1 $class1
 * @property integer $class1_id
 */
class enrollment extends Model
{


    public $table = 'enrollment';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'class1_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'class1_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class1_id' => 'required|integer'
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
