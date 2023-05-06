<?php

namespace App\Repositories;

use App\Models\student;
use App\Repositories\BaseRepository;

/**
 * Class studentRepository
 * @package App\Repositories
 * @version May 3, 2023, 4:33 pm UTC
*/

class studentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'dateofbirth',
        'address',
        'grade'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return student::class;
    }
}
