@extends('layouts.layout')
@section('content')

<!-- Starting Data Table -->
 <section>
    <div class="container mt-5">
    <table class="table mt-5">
        <div class="container d-flex flex-row justify-content-between align-items-center">
            <div>
                <h2>Users</h2>
            </div>
            <div>
            <a href="{{route('create-user')}}"><button class="btn btn-primary">Add User</button></a>
            </div>    
        </div>
        <!-- Showing msg from redirect -->
        @if(session('msg'))
        <marquee class="text-success mt-2" Loop='1'>{{session('msg')}}</marquee>
        @endif
        <!-- end if for showing msg -->

        <!-- Showing error from redirect -->
        @if(session('error'))
        
        <marquee class="text-danger mt-2" Loop='1'>{{session('error')}}</marquee>
        @endif
        <!-- end if for showing error -->
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($data)
            @foreach($data as $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>
                <td>{{$value['email']}}</td>
                <td>{{$value['address']}}</td>
                <td><a href="edit/{{$value->id}}" class="me-3"><i class="fa-solid fa-pen text-info"></i></a><a href="delete-user/{{$value->id}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    </div>
 </section>

 



@endsection
