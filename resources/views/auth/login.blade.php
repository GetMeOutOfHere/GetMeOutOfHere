@extends('layouts.main')

@section('content')
<div class="row">
  <form class="col s12 center" method="POST" action="{{ route('login') }}" id="login-form">
    {{ csrf_field() }}
    <div class="row">
      <div class="col s12 center">
        <h3>Login Here!</h3>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">account_circle</i>
        <input id="email" type="email" class="validate" name="email">
        <label for="email" data-error="wrong" data-success="right">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <i class="material-icons prefix">settings</i>
        <input id="password" type="password" class="validate" name="password">
        <label for="password">Password</label>
      </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">send</i>Login</button>
  </form>
</div>
@endsection
