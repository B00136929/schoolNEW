<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class teacher
 * @package App\Models
 * @version May 5, 2023, 10:31 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $class1s
 * @property string $firstname
 * @property string $surname
 * @property string $subject
 * @property string $dateofbirth
 */
class teacher extends Model
{


    public $table = 'teacher';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'subject',
        'dateofbirth'
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
        'subject' => 'string',
        'dateofbirth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'subject' => 'nullable|string|max:30',
        'dateofbirth' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function class1s()
    {
        return $this->hasMany(\App\Models\Class1::class, 'teacher_id');
    }
}
