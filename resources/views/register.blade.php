<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Adding the head component --}}
    <x-head />
    <title>Register</title>
</head>

<body class="bg-light">
    {{-- Adding the header component --}}
    <x-Header />
    <div>
        <div class="row align-items-center" style="height: 160vh;">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <form action="{{ route('register') }}" method="post" class="bg-white p-5 ">
                    @csrf
                    <h1 class="text-primary pb-3">Register</h1>

                    <div class="form-group pb-3">
                        <label hidden for="username">Username</label>
                        <input type="text" class="form-control @error('username')border border-danger @enderror"
                            id="username" name="username" placeholder="Username" value="{{old("username")}}">
                        {{-- Printing the error in case of invalid entry --}}
                        <div class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group pb-3">
                        <label hidden for="fullname">Full name</label>
                        <input type="text" class="form-control @error('fullname')border border-danger @enderror"
                            id="fullname" name="fullname" placeholder="Full name" value="{{old('fullname')}}">

                        {{-- Printing the error in case of invalid entry --}}
                        <div class="text-danger">
                            @error('fullname')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group pb-3">
                        <label hidden for="email">Email address</label>
                        <input type="email" class="form-control @error('email')border border-danger @enderror"
                            id="email" name="email" placeholder="Email adress" value="{{old('email')}}">

                        {{-- Printing the error in case of invalid entry --}}
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group pb-3">
                        <label hidden for="password">Password</label>
                        <input type="password" class="form-control @error('password')border border-danger @enderror"
                            id="password" name="password" placeholder="Password">
                        {{-- Printing the error in case of invalid entry --}}
                        <div class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group pb-3">
                        <label hidden for="password">Confirm Password</label>
                        <input type="password"
                            class="form-control @error('password_confirmation')border border-danger @enderror"
                            id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">

                        {{-- Printing the error in case of invalid entry --}}
                        <div class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-check pb-3">
                        <input hidden type="checkbox" class="form-check-input" id="remember_me">
                        <label class="form-check-label" for="remember_me">Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
