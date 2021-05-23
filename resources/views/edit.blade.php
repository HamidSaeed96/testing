@extends('layouts.main')

@section('contant')
 <form action="{{ url('/update') }}" method="GET">
    @csrf
    <input type="hidden" name="id" value="{{ $cmp->id }}">
    <hr>
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $cmp->name }}"><br>
    <hr>
    <label for="Email">Email</label>
    <input type="email" name="email" value="{{ $cmp->email }}"><br>
    <hr>
    <label for="logo">Logo</label>
    <input type="file" name="logo" value="{{ $cmp->logo }}"><br>
    <hr>
    <label for="web">Website</label>
    <input type="text" name="web" value="{{ $cmp->web }}"><br>
    <button type="submit" class="btn btn-primary">Update</button>
 </form>
 <hr>


@endsection()