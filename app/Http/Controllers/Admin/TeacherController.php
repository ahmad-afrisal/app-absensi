<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::all()->sortByDesc("id");

        return view('admin.teacher.index', [
            'teacher' => $teacher
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teach = Teacher::create([
            'user_id' => 1,
            'nip' => $request->nip,
            'fullname' => $request->fullname,
            // 'gender' => $request->gender,
            // 'gender' => 0,
            'gender' => $request->input('gender'),
            'phone_number' => $request->phone_number,
            'level' => $request->level,
            'status' => 1,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $teach = Teacher::all()->where('id', $id);
        $teach = Teacher::find($id);
        return view ('admin.teacher.edit', compact('teach'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update menggunakan eloquent
        $pengajar = Teacher::find($id);
        $pengajar->nip = $request->nip;
        $pengajar->fullname = $request->fullname;
        $pengajar->gender = $request->gender;
        $pengajar->phone_number = $request->phone_number;
        $pengajar->level = $request->level;
        // $pengajar->status = $request->status;
        $pengajar->save();

        return redirect()->route('teachers.index')->with('success', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus menggunakan eloquent
        $pengajar = Teacher::find($id);
        $pengajar->delete();
    
        return redirect()->route('teachers.index')->with('success', 'Data Berhasil dihapus');
    }
}
