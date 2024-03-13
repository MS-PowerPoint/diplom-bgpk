<?php

namespace App\Http\Controllers\Api;

use App\Models\schoolboy;
use App\Models\school;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(school::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $result = school::create([
            'name' => $request->name,
            'number' => $request->number,
            'quantity' => $request->quantity,
            'year' => $request->year,
            'desk' => $request->desk,]);
        return response()->json($result,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(school $school)
    {
        if($book){return response()->json($book,200);}
        else return response()->json('not_found',404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(school $school)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, school $school)
    {
        $result = $school->update([
            $school->name = $request->name,
            $school->number = $request->number,
            $school->quantity = $request->quantity,
            $school->year = $request->year,
            $school->desk = $request->desk,]);
        return response()->json($result,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(school $school)
    {
        $school->delete();

    }
}
