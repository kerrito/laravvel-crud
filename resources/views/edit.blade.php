
@extends('layouts.layout')
@section('content')


<!-- Login Form Section Start -->

<section>
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 mt-5">
                <form method="post" action="{{route('edit-user')}}" class="mt-5">
                    @csrf
                    <h2 class="text-center mb-4">Create User Here</h2>
                    <div class="row flex-column">
                        <div class="d-none">
                            <label for="id">id</label>
                            <input class="mb-0 form-control" name="id" value="{{$data->id}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Name</label>
                            <input class="mb-0 form-control" placeholder="Enter Your Name Here" type="text" name="name" value="{{$data->name}}" pattern="[A-za-z ]{3,16}" title="Name must contain 3 to 16 character no special character allowed" required>
                        </div>
                        <div class=" mb-3">
                            <label for="email">Email</label>
                            <input class="mb-0 form-control" name="email" type="email" placeholder="Enter Email Address Here" value="{{$data->email}}" pattern="[a-zA-z]+[a-zA-z]+[a-zA-z]+[a-zA-Z0-9-_.]+@[a-zA-Z]+\.[a-zA-Z]{2,5}$" title="Please enter valid email" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Address</label>
                            <input name="address" class="mb-0 form-control" id="" rows="3" value="{{$data->address}}" placeholder="address" pattern="[A-Za-z0-9,/-_\ ]{20,100}" title="Address must contain 15 to 200 character No special character other than , / - _ \ allowed" required>
                        </div>
                        <div class="text-center">
                            <button class="form-control btn-primary text-light fw-bold" type="submit" name="btn">Add New User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Login Form Section End -->

@endsection