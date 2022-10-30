@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" value="{{ old('name') }}" required>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror"
                            id="user_name" placeholder="User Name" value="{{ old('user_name') }}" required>
                        <label for="user_name">Username</label>
                        @error('user_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" value="{{ old('password') }}" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Here</a></small>
            </main>
        </div>
    </div>
@endsection
