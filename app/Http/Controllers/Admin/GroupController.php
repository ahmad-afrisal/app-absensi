<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Semester;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all()->sortByDesc("id");

        return view('admin.group.index', [
            'groups' => $groups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $semesters = Semester::where('status', 1)->get()->sortByDesc("id");

        return view('admin.group.create', [
            'semesters' => $semesters
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'semester_id' => ['required','exists:semesters,id'],
            'name' => ['required',],
        ]);

        $user = Group::create([
            'semester_id' => $request->semester_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name.'-'.$request->semester_id),
            'status' => 1,
        ]);

        return redirect()->route('groups.index')->with('success', 'Data Berhasil ditambahkan');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
