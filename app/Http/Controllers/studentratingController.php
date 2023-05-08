<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentratingRequest;
use App\Http\Requests\UpdatestudentratingRequest;
use App\Repositories\studentratingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class studentratingController extends AppBaseController
{
    /** @var studentratingRepository $studentratingRepository*/
    private $studentratingRepository;

    public function __construct(studentratingRepository $studentratingRepo)
    {
        $this->studentratingRepository = $studentratingRepo;
    }

    /**
     * Display a listing of the studentrating.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $studentratings = $this->studentratingRepository->all();

        return view('studentratings.index')
            ->with('studentratings', $studentratings);
    }

    /**
     * Show the form for creating a new studentrating.
     *
     * @return Response
     */
    public function create()
    {
        return view('studentratings.create');
    }

    /**
     * Store a newly created studentrating in storage.
     *
     * @param CreatestudentratingRequest $request
     *
     * @return Response
     */
    public function store(CreatestudentratingRequest $request)
    {
        $input = $request->all();

        $studentrating = $this->studentratingRepository->create($input);

        Flash::success('Studentrating saved successfully.');

        return redirect(route('studentratings.index'));
    }

    /**
     * Display the specified studentrating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentrating = $this->studentratingRepository->find($id);

        if (empty($studentrating)) {
            Flash::error('Studentrating not found');

            return redirect(route('studentratings.index'));
        }

        return view('studentratings.show')->with('studentrating', $studentrating);
    }

    /**
     * Show the form for editing the specified studentrating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentrating = $this->studentratingRepository->find($id);

        if (empty($studentrating)) {
            Flash::error('Studentrating not found');

            return redirect(route('studentratings.index'));
        }

        return view('studentratings.edit')->with('studentrating', $studentrating);
    }

    /**
     * Update the specified studentrating in storage.
     *
     * @param int $id
     * @param UpdatestudentratingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestudentratingRequest $request)
    {
        $studentrating = $this->studentratingRepository->find($id);

        if (empty($studentrating)) {
            Flash::error('Studentrating not found');

            return redirect(route('studentratings.index'));
        }

        $studentrating = $this->studentratingRepository->update($request->all(), $id);

        Flash::success('Studentrating updated successfully.');

        return redirect(route('studentratings.index'));
    }

    /**
     * Remove the specified studentrating from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentrating = $this->studentratingRepository->find($id);

        if (empty($studentrating)) {
            Flash::error('Studentrating not found');

            return redirect(route('studentratings.index'));
        }

        $this->studentratingRepository->delete($id);

        Flash::success('Studentrating deleted successfully.');

        return redirect(route('studentratings.index'));
    }
	
	
	public function ratestudent($studentid)
	{
		return view('studentratings.ratestudent')->with('studentid',$studentid);
	}
	
}
