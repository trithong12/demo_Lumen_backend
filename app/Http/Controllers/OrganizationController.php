<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
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

    /**Get all the elements */
    public function index()
    {
        return response()->json(Organization::all());
    }

    /**Get the specific element by id */
    public function show($id)
    {
        return response()->json(Organization::find($id));
    }

    /**Create an element using data from request's payload */
    public function create(Request $request)
    {
        $Organization = Organization::create($request->all());

        return response()->json($Organization, 201);
    }

    /**Update a specific element indicated by id using data from request's payload */
    public function update($id, Request $request)
    {
        $Organization = Organization::findOrFail($id);
        $Organization->update($request->all());

        return response()->json($Organization, 200);
    }

    /**Delete a specific indicated by id */
    public function delete($id)
    {
        Organization::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
