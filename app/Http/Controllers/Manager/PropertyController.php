<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use function app\Helper\errorMessage;
use function app\Helper\successMessage;
use function app\Helper\updateMessage;

class PropertyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:property-list|property-create|property-edit|property-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:property-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:property-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:property-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('manager.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.properties.create', [
            'property' => new Property(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {

        $property = new Property([
            'name' => $request->name
        ]);
        $property->save();
        return successMessage();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('manager.properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->update([
            $request->all(),
        ]);
        return updateMessage();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return errorMessage();
    }



}
