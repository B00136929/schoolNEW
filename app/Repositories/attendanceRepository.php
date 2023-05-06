<?php

namespace App\Repositories;

use App\Models\attendance;
use App\Repositories\BaseRepository;

/**
 * Class attendanceRepository
 * @package App\Repositories
 * @version May 3, 2023, 4:33 pm UTC
*/

class attendanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class1_id',
        'date1',
        'present'
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
        return attendance::class;
    }
}
