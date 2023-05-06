<?php

namespace App\Repositories;

use App\Models\enrollment;
use App\Repositories\BaseRepository;

/**
 * Class enrollmentRepository
 * @package App\Repositories
 * @version May 5, 2023, 10:33 pm UTC
*/

class enrollmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class1_id'
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
        return enrollment::class;
    }
}
