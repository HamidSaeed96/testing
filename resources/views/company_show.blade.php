@extends('layouts.main')

@section('contant')

 <hr>


<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($company as $cmp)
            <tr>
                <td>{{ $cmp->name }}</td>
                <td>{{ $cmp->email }}</td>
                <td>{{ $cmp->logo }}</td>
                <td>{{ $cmp->web }}</td>
                <td>
                <a href="{{ url('/delete/').'/'.$cmp->id }}" class="btn btn-danger">Delete</a>
                <a href="{{ url('/edit/').'/'.$cmp->id }}" class="btn btn-info">Edit</a>
                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection()