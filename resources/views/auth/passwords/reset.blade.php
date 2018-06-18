@extends('layouts.app')

@section('content')
<div class="container">
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title">Join the Community</h1>

          <form action="{{route('register')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="field">
              <label for="email" class="label">Email Address: </label>
              <p class="control">
                <input class="input $errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" required/>
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">There field is require!</p>
              @endif
            </div>

            <div class="field">
              <label for="password" class="label">Password: </label>
              <p class="control">
                <input class="input $errors->has('password') ? 'is-danger' : ''" type="password" name="password" id="passwrod" required/>
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">There field is require!</p>
              @endif

            </div>

            <div class="field">
              <label for="passwordConfirmaton" class="label">Password Confirmation: </label>
              <p class="control">
                <input class="input $errors->has('password_comfirmatoin') ? 'is-danger' : ''" type="password" name="password_comfirmatoin" id="passwordConfirmaton" required />
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">There field is require!</p>
              @endif
            </div>

            <button type="submit" name="button" class="button is-primary is-outlined is-fullwidth m-t-20">Reset Password</button>
          </form>
        </div> <!-- End card content -->
      </div> <!-- End card -->
      <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an account?</a></h5>
  </div>
</div>

@endsection
