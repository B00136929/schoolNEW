<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclass1Request;
use App\Http\Requests\Updateclass1Request;
use App\Repositories\class1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class class1Controller extends AppBaseController
{
    /** @var class1Repository $class1Repository*/
    private $class1Repository;

    public function __construct(class1Repository $class1Repo)
    {
        $this->class1Repository = $class1Repo;
    }

    /**
     * Display a listing of the class1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $class1s = $this->class1Repository->all();

        return view('class1s.index')
            ->with('class1s', $class1s);
    }

    /**
     * Show the form for creating a new class1.
     *
     * @return Response
     */
    public function create()
    {
        return view('class1s.create');
    }

    /**
     * Store a newly created class1 in storage.
     *
     * @param Createclass1Request $request
     *
     * @return Response
     */
    public function store(Createclass1Request $request)
    {
        $input = $request->all();

        $class1 = $this->class1Repository->create($input);

        Flash::success('Class1 saved successfully.');

        return redirect(route('class1s.index'));
    }

    /**
     * Display the specified class1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $class1 = $this->class1Repository->find($id);

        if (empty($class1)) {
            Flash::error('Class1 not found');

            return redirect(route('class1s.index'));
        }

        return view('class1s.show')->with('class1', $class1);
    }

    /**
     * Show the form for editing the specified class1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $class1 = $this->class1Repository->find($id);

        if (empty($class1)) {
            Flash::error('Class1 not found');

            return redirect(route('class1s.index'));
        }

        return view('class1s.edit')->with('class1', $class1);
    }

    /**
     * Update the specified class1 in storage.
     *
     * @param int $id
     * @param Updateclass1Request $request
     *
     * @return Response
     */
    public function update($id, Updateclass1Request $request)
    {
        $class1 = $this->class1Repository->find($id);

        if (empty($class1)) {
            Flash::error('Class1 not found');

            return redirect(route('class1s.index'));
        }

        $class1 = $this->class1Repository->update($request->all(), $id);

        Flash::success('Class1 updated successfully.');

        return redirect(route('class1s.index'));
    }

    /**
     * Remove the specified class1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $class1 = $this->class1Repository->find($id);

        if (empty($class1)) {
            Flash::error('Class1 not found');

            return redirect(route('class1s.index'));
        }

        $this->class1Repository->delete($id);

        Flash::success('Class1 deleted successfully.');

        return redirect(route('class1s.index'));
    }
}
