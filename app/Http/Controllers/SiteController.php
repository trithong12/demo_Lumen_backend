<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
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
        return response()->json(Site::all());
    }

    /**Get the specific element by id */
    public function show($id)
    {
        return response()->json(Site::find($id));
    }

    /**Create an element using data from request's payload */
    public function create(Request $request)
    {
        $Site = Site::create($request->all());

        return response()->json($Site, 201);
    }

    /**Update a specific element indicated by id using data from request's payload */
    public function update($id, Request $request)
    {
        $Site = Site::findOrFail($id);
        $Site->update($request->all());

        return response()->json($Site, 200);
    }

    /**Delete a specific indicated by id */
    public function delete($id)
    {
        Site::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
