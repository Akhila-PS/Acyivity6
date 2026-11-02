@extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <p>
            Roll No: <br>
            <input type="text" name="roll_no" required>
        </p>

        <p>
            Name: <br>
            <input type="text" name="name" required>
        </p>

        <p>
            Email: <br>
            <input type="email" name="email" required>
        </p>

        <p>
            Department: <br>
            <input type="text" name="department" value="CSE" required>
        </p>

        <p>
            Semester: <br>
            <input type="number" name="semester" value="7" required>
        </p>

        <p>
            CGPA: <br>
            <input type="number" step="0.01" name="cgpa" required>
        </p>

        <button type="submit">Save Student</button>
    </form>
@endsection