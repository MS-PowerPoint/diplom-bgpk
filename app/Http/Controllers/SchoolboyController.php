<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Models\schoolboy;
use Illuminate\Http\Request;

class SchoolboyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view ('schoolboys.index',['schoolboys'=>schoolboy::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schoolboys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = schoolboy::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'class' => $request->class,
            'estimation' => $request->estimation,
            'school_id' => $request->school_id,

        ]);
        if ($result) {
           return redirect('/schoolboys')->with(['succes' => 1]);
        }else{
            return redirect('/schoolboys')->with(['succes' => 0]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(schoolboy $schoolboy)
    {
        return view('schoolboys.show', ['schoolboy' => $schoolboy]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schoolboy $schoolboy)
    {
        return view('schoolboys.edit', ['schoolboy' => $schoolboy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schoolboy $schoolboy)
    {
        $result = $schoolboy->update([
            $schoolboy->name = $request->name,
            $schoolboy->surname = $request->surname,
            $schoolboy->patronymic = $request->patronymic,
            $schoolboy->class = $request->class,
            $schoolboy->estimation = $request->estimation,
            $schoolboy->school_id = $request->school_id,

        ]);
        if ($result) {
            return redirect('/schoolboys')->with(['succes' => 1]);
        }else{
            return redirect('/schoolboys')->with(['succes' => 0]);
        }
        // return view ('schoolboys.edit', ['schoolboy' => $schoolboy]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schoolboy $schoolboy)
    {
        $schoolboy->delete();

        if ($schoolboy) {
            return redirect('/schoolboys')->with(['succes' => 1]);
        }else{
            return redirect('/schoolboys')->with(['succes' => 0]);
        }
    }
}
