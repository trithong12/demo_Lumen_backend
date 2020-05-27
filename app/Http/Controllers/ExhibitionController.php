<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**For Home page only, take 9 elements */
    public function index()
    {
        $data = Exhibition::with('site', 'showUnit')
            ->latest()
            ->take(9)
            ->get();
        return response()->json($data);
    }

    /**Get all the elements */
    public function getAll()
    {
        return response()->json(Exhibition::with('site', 'showUnit')->get());
    }

    /**Get the specific element by id */
    public function show($id)
    {
        return response()->json(Exhibition::with('site', 'showUnit')->find($id));
    }

    /**Create an element using data from request's payload */
    public function create(Request $request)
    {
        $exhibition = Exhibition::create($request->all());

        return response()->json($exhibition, 201);
    }

    /**Update a specific element indicated by id using data from request's payload */
    public function update($id, Request $request)
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->update($request->all());

        return response()->json($exhibition, 200);
    }

    /**Delete a specific indicated by id */
    public function delete($id)
    {
        Exhibition::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
