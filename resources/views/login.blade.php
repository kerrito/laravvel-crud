@extends('layouts.layout')
@section('content')


<!-- Login Form Section Start -->

<section>
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 mt-5">
                <form method="POST" action="login" class="mt-5">
                    @csrf
                    <h4 class="text-center mb-4">Login Here</h4>
                                    
                        <!-- Showing error from redirect -->
                        @if(session('error'))
                        
                        <h2 class="text-danger mt-2 text-center">{{session('error')}}</h2>
                        @endif
                        <!-- end if for showing error -->

                    <div class="row flex-column">
                        <div class=" mb-3">
                            <label for="email">Email</label>
                            <input class="mb-0 form-control" name="email" type="email" placeholder="Enter Email Address Here" pattern="[a-zA-z]+[a-zA-z]+[a-zA-z]+[a-zA-Z0-9-_.]+@[a-zA-Z]+\.[a-zA-Z]{2,5}$" title="Please enter valid email" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Password</label>
                            <input class="mb-0 form-control" type="password" name="pass" placeholder="Enter Password Here" pattern="[A-Za-z0-9]{6,}" title="password must have 6 digits" required>
                        </div>
                        <div class="text-center">
                            <button class="form-control btn-primary text-light fw-bold" name="btn">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Login Form Section End -->

@endsection