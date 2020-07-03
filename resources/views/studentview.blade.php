@extends('layout.app')

@section('styles')
<div class="container">
<body>
<table border = "1" id="registeredstudent">
<tr>
<td>Id</td>
<td>reg number</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Gender</td>
<td>Date of birth</td>
<td>Year of study</td>
<td>Phone Number</td>
<td>Email</td>
</tr>
@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->reg_number}}</td>
<td>{{ $student->first_name }}</td>
<td>{{ $student->middle_name }}</td>
<td>{{ $student->last_name }}</td>
<td>{{ $student->gender }}</td>
<td>{{ $student->date_of_birth }}</td>
<td>{{ $student->year_of_study}}</td>
<td>{{ $student->phone_number }}</td>
<td>{{ $student->email }}</td>
</tr>
@endforeach
</table>
</body>

</div>
@endsection
