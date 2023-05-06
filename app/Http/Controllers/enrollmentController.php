<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateenrollmentRequest;
use App\Http\Requests\UpdateenrollmentRequest;
use App\Repositories\enrollmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class enrollmentController extends AppBaseController
{
    /** @var enrollmentRepository $enrollmentRepository*/
    private $enrollmentRepository;

    public function __construct(enrollmentRepository $enrollmentRepo)
    {
        $this->enrollmentRepository = $enrollmentRepo;
    }

    /**
     * Display a listing of the enrollment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $enrollments = $this->enrollmentRepository->all();

        return view('enrollments.index')
            ->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new enrollment.
     *
     * @return Response
     */
    public function create()
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created enrollment in storage.
     *
     * @param CreateenrollmentRequest $request
     *
     * @return Response
     */
    public function store(CreateenrollmentRequest $request)
    {
        $input = $request->all();

        $enrollment = $this->enrollmentRepository->create($input);

        Flash::success('Enrollment saved successfully.');

        return redirect(route('enrollments.index'));
    }

    /**
     * Display the specified enrollment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        return view('enrollments.show')->with('enrollment', $enrollment);
    }

    /**
     * Show the form for editing the specified enrollment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        return view('enrollments.edit')->with('enrollment', $enrollment);
    }

    /**
     * Update the specified enrollment in storage.
     *
     * @param int $id
     * @param UpdateenrollmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateenrollmentRequest $request)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        $enrollment = $this->enrollmentRepository->update($request->all(), $id);

        Flash::success('Enrollment updated successfully.');

        return redirect(route('enrollments.index'));
    }

    /**
     * Remove the specified enrollment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        $this->enrollmentRepository->delete($id);

        Flash::success('Enrollment deleted successfully.');

        return redirect(route('enrollments.index'));
    }
}
