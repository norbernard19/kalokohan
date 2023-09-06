@extends('layout.index')

@section('content')
<nav class="navbar navbar-dark bg-mynav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Assasins Crud</a>
    </div>
</nav>

<div class="container-table">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight"><h2>Students</h2></div>
        <div class="p-2 bd-highlight">
            <a href="{{ route('add') }}" class="btn btn-secondary">Add new Students</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student Type</th>
                    <th scope="col">Id_number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Grades</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody id="mytable">
                @foreach ($myArray as $student)
                <tr>
                    <td class="content">{{ $student['student_type']}}</td>
                    <td class="content">{{ $student['id_number'] }}</td>
                    <td class="content">{{ $student['name'] }}</td>
                    <td class="content">{{ $student['age']}}</td>
                    <td class="content">{{ $student['gender'] }}</td>
                    <td class="content">{{ $student['city'] }}</td>
                    <td class="content">{{ $student['mobile_number']  }}</td>
                    <td class="content">{{ number_format($student['grades'], 2) }}</td>
                    <td class="content">{{ $student['email'] }}</td>
                    
                    <td>
                        <a href="#" class="edit-link">Edit</a>
                    </td>
                   
                    <td>
                        <a href="#" class="edit-link">Delete</a>
                    </td>
                </tr>
                @endforeach
{{-- 
                @foreach ($foreignStudents as $student)
                <tr>
                    <td class="content">Foreign Student</td>
                    <td class="content">{{ $student->id_number }}</td>
                    <td class="content">{{ $student->name }}</td>
                    <td class="content">{{ $student->age }}</td>
                    <td class="content">{{ $student->city }}</td>
                    <td class="content">{{ $student->mobile_number }}</td>
                    <td class="content">{{ number_format($student->grades, 2) }}</td>
                    <td class="content">{{ $student->email }}</td>
                    <td>
                        <a href="#" class="edit-link">Edit</a>
                    </td>
                    <td>
                        <a href="#" class="edit-link">Delete</a>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
