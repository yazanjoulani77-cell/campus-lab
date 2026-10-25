<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = ['Ahmad', 'Sara', 'Omar', 'Lina'];

        return 'All Students: '.implode(', ', $students);
    }

    public function show($id)
    {
        return "Student ID: {$id}";
    }

    public function create()
    {
        return 'Create Student Form';
    }

    public function store(Request $request)
    {
        return 'Student Created';
    }

    public function update(Request $request, $id)
    {
        return "Student Updated: {$id}";
    }

    public function destroy($id)
    {
        return "Student Deleted: {$id}";
    }
}
