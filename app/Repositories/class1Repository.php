<?php

namespace App\Repositories;

use App\Models\class1;
use App\Repositories\BaseRepository;

/**
 * Class class1Repository
 * @package App\Repositories
 * @version May 3, 2023, 4:33 pm UTC
*/

class class1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'subject',
        'teacher_id'
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
        return class1::class;
    }
}
