@extends('layouts.guest')
@section('content')
<div class="full-page login-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <div class="text-center text-muted mb-4 mt-5">
                        <small>sign in with credentials</small>
                    </div>
                    <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                aria-label="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                aria-label="Password">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
