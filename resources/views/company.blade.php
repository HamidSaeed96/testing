@extends('layouts.main')

@section('contant')
 <form action="{{ url('/store') }}" method="POST">
    @csrf
    <hr>
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    <hr>
    <label for="email">Email</label>
    <input type="email" name="email"><br>
    <hr>
    <label for="logo">Logo</label>
    <input type="file" name="logo"><br>
    <hr>
    <label for="web">Website</label>
    <input type="text" name="web"><br>
    <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 <hr>


@endsection()