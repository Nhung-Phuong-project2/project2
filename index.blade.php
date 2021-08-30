@extends('layout')
@section('content')
@csrf
    <div class="container">
    <table class="table table-dark table-striped">
        <h1>Book</h1>
    <a href="{{url('book/create')}}">Them</a>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Details</th>
            <th>Author</th>
            <th>Type</th>
            <th>NXB</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>
                <a href="{{url('book/update')}}">Edit</a>
            </th>
            <th>
                <a href="{{url('book/delete')}}">Delete</a>
            </th>
        </tr>
        
    </table>
        </div>
        
    
@endsection