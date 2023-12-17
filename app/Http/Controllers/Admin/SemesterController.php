<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Semester;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semesters = Semester::all()->sortByDesc("id");

        return view('admin.semester.index', [
            'semesters' => $semesters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.semester.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required','unique:semesters,name'],
        ]);

        $user = Semester::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => 1,
        ]);


        return redirect()->route('semesters.index')->with('success', 'Data Berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semester $semester)
    {
        return view('admin.semester.edit', [
            'semester' => $semester
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semester $semester)
    {
        $this->validate($request, [
            'name' => ['required','unique:semesters,name'],
        ]);
        
        $semester->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => 1,
        ]);


        return redirect()->route('semesters.index')->with('success', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
