<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class studentrating
 * @package App\Models
 * @version May 7, 2023, 9:34 pm UTC
 *
 * @property \App\Models\Student $student
 * @property integer $rating
 * @property string $comment
 * @property integer $student_id
 */
class studentrating extends Model
{


    public $table = 'studentrating';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'rating',
        'comment',
        'student_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rating' => 'integer',
        'comment' => 'string',
        'student_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rating' => 'nullable|integer',
        'comment' => 'nullable|string',
        'student_id' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'student_id');
    }
}
