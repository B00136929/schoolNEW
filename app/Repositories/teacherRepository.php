<?php

namespace App\Repositories;

use App\Models\teacher;
use App\Repositories\BaseRepository;

/**
 * Class teacherRepository
 * @package App\Repositories
 * @version May 5, 2023, 10:31 pm UTC
*/

class teacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'subject',
        'dateofbirth'
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
        return teacher::class;
    }
}
