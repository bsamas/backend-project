@extends('layout.app')
@section('styles')
<body>
    <h1>Add departments</h1>

       @foreach($departments as $department)
        <li> {{ $department }} <a href="/" >Edit</a> <a href="/">Delete</a></li>
 @endforeach

</body>


@endsection
@section('scripts')
