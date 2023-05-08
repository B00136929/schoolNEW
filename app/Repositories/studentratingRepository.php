<?php

namespace App\Repositories;

use App\Models\studentrating;
use App\Repositories\BaseRepository;

/**
 * Class studentratingRepository
 * @package App\Repositories
 * @version May 7, 2023, 9:34 pm UTC
*/

class studentratingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rating',
        'comment',
        'student_id'
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
        return studentrating::class;
    }
}
