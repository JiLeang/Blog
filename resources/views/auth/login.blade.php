@extends('layouts.app')

@section('content')

<div class="column">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log In</h1>
                <form action="{{route('login')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                        <input class="input {{$errors->has('email') ? 'is-danger' :''}}" type="text" name="email" id="email" placeholder="youremail@whatever.com" value="{{ old('email') }}">
                    </p>
                    @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                        <input class="input {{$errors->has('password') ? 'is-danger' :''}}" type="text" name="password" id="password">
                    </p>
                    @if($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>
                <b-checkbox class="m-t-10" name="remember">Remember Me</b-checkbox>
                <button class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
                </form>
            </div>
        </div>
        <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forget Your   Password?</a></h5>
    </div>
    
</div>


@endsection
