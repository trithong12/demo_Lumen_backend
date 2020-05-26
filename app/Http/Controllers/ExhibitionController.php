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

    public function index()
    {
        return response()->json(Exhibition::all());
    }

    public function show($id)
    {
        return response()->json(Exhibition::find($id));
    }

    public function create(Request $request)
    {
        $exhibition = Exhibition::create($request->all());

        return response()->json($exhibition, 201);
    }

    public function update($id, Request $request)
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->update($request->all());

        return response()->json($exhibition, 200);
    }

    public function delete($id)
    {
        Exhibition::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
