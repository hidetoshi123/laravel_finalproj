<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view("students.index", compact('students'));
    }

    public function create()
    {
        return view("students.create");
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view("students.show", compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view("students.edit", compact('student'));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        // Decrement IDs
        $students = Student::where('id', '>', $id)->orderBy('id')->get();
        foreach ($students as $student) {
            $student->decrement('id');
        }

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'grade' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        if ($request->hasFile('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $student = Student::findOrFail($id);
        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'grade' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        } else {
            // Set default profile picture if none is uploaded
            $validatedData['profile_picture'] = 'profile_pictures/default.png';
        }

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }
}
