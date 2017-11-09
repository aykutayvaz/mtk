@extends('layouts.default')
@section('title','login')

@section('content')


   <div class="card card-login mx-auto mt-5">
     <div class="card-header">Login</div>
     <div class="card-body">
       <h1> {{$message or ''}} </h1>
       <!--{{ Form::open(array('action' => 'Users\LoginController@validate_login'))}}-->
       {{ Form::open(array('url' => 'login'))}}
          {{ Form::label('Email')}}
          {{ Form::email('email',null, array('class' => 'form-control','id'=>'exampleInputEmail1','placeholder'=>'Emaili giriniz','required')) }}
          <br/>
          {{ Form::label('Şifre')}}
          {{ Form::password('password', array('class' => 'form-control','id'=>'exampleInputPassword1','placeholder'=>'Şifrenizi giriniz','required')) }}
          <br/>
          {{ Form::submit('Gönder',array('class' => 'btn btn-primary btn-block'))}}
          {{ Form::close()}}
    <!--   <form>
         <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
         </div>
         <div class="form-group">
           <div class="form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember Password</label>
           </div>
         </div>
         <a class="btn btn-primary btn-block" href="index.html">Login</a>
       </form> -->
       <div class="text-center">
         <!--<a class="d-block small mt-3" href="/register">Register an Account</a>-->
         {{ HTML::linkAction('Users\LoginController@register','Register',array(),array('class' => 'd-block small mt-3')) }}
         <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
       </div>
     </div>
  <!--Bu master{{$name or ''}}<br/>-->
  <!--{{ $location or '' }}-->
@endsection
