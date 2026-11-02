@extends('layouts.app')

@section('content')
    <h1>Students List</h1>
    <a href="{{ route('students.create') }}">Add New Student</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Semester</th>
                <th>CGPA</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->roll_no }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->semester }}</td>
                <td>{{ $student->cgpa }}</td>
                <td><a href="{{ route('students.show', $student) }}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection