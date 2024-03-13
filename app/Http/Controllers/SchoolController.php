<?php

namespace App\Http\Controllers;

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
        return view('schools.index',['schools'=>school::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = school::create([
            'name' => $request->name,
            'number' => $request->number,
            'quantity' => $request->quantity,
            'year' => $request->year,
            'desk' => $request->desk,

        ]);
        if ($result) {
           return redirect('/schools')->with(['succes' => 1]);
        }else{
            return redirect('/schools')->with(['succes' => 0]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(school $school)
    {
        return view('schools.show', ['school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(school $school)
    {
        return view('schools.edit', ['school' => $school]);
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
            $school->desk = $request->desk,

        ]);
        if ($result) {
            return redirect('/schools')->with(['succes' => 1]);
        }else{
            return redirect('/schools')->with(['succes' => 0]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(school $school)
    {
        $school->delete();

        if ($school) {
            return redirect('/schools')->with(['succes' => 1]);
        }else{
            return redirect('/schools')->with(['succes' => 0]);
        }
    }
}
