@extends('layouts.master')

@section('title')
    #Smixs
@endsection

@section('content')
    @include('includes.message-block')
    @if (count(Auth::user())>0 )
     <script>
       window.location.href = '{{route("dashboard")}}'; //using a named route
      </script>
    @endif
    <div class="row">

        <!--<div class="col-md-4 col-md-offset-4">
                <center><h3>Sign In</h3></center>
                <form action="{{ route('signin') }}" method="post">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old ('email')}}">
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password')}}">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            
            
        </div>-->

        <div class="col-xs-12 col-md-4 col-md-offset-4">
            
            <center><b class="title-style">{{ $site_code }}</b> <br> <h5><b>{{ $site_title }}</b></h5></center>
            <div class="panel panel-default login-elements">
              <div class="panel-body">
                    <form action="{{ route('signin') }}" method="post" name='process' novalidate>
                    <center><h6>Sign In</h6></center>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <div class="inner-addon right-addon">
                        <div ng-show="process.email.$valid" > 
                            <i class="text-success glyphicon glyphicon-ok"></i>
                        </div>
                        <div ng-messages="process.email.$error" >
                            <i ng-message="minlength" class="text-danger glyphicon glyphicon-remove"></i>
                            <i ng-message="maxlength" class="text-danger glyphicon glyphicon-remove"></i>
                            <i ng-message="pattern" class="text-danger glyphicon glyphicon-remove"></i>
                        </div>
                        <input type="text" id="inputEmail" value="{{ Request::old ('email')}}" class="form-control login-elements" name="email" placeholder="E-Mail" ng-model="email" required ng-minlength="5" ng-maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                    </div>
                    <div ng-messages="process.email.$error" >
                      <span ng-message="minlength" class="label label-danger">Username / Email is too short</span>
                      <span ng-message="maxlength" class="label label-danger">Username / Email field is too long</span>
                      <span ng-message="pattern" class="label label-warning">Incorrect Email</span>
                    </div>
                     
                     
                    <label for="inputPassword" class="sr-only">Password</label>
                    <div class="inner-addon right-addon {{ $errors->has('password') ? 'has-error' : '' }}">
                         <div ng-show="process.password.$valid" > 
                            <i class="text-success glyphicon glyphicon-ok"></i>
                         </div>
                         <div ng-messages="process.password.$error" >
                            <i ng-message="minlength" class="text-danger glyphicon glyphicon-remove"></i>
                            <i ng-message="maxlength" class="text-danger glyphicon glyphicon-remove"></i>
                         </div>
                    <input type="password" id="inputPassword" class="form-control login-elements" name="password" placeholder="Password" required="true" ng-model="password" ng-minlength="6" ng-maxlength="20" value="{{ Request::old('password')}}">
                    </div>
                    <div ng-messages="process.password.$error" ng-if="process.password.$dirty">
                        <span ng-message="minlength" class="label label-danger">Password is too short</span>
                      <span ng-message="maxlength" class="label label-danger">Password is too long</span>
                    </div>

                    <div class="checkbox">
                          <label>
                            <input type="checkbox" name="remember" > Remember Me
                          </label>
                    </div>
                   <input class="btn btn-sm btn-primary login-elements" type="submit" value="Sign In" ng-disabled="!process.$valid">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                     <a class="pull-right" href="redirect"><img src="http://i.stack.imgur.com/ZW4QC.png"></a>
                </form>
                   <label class="pull-right"><a class="btn" href="">Retrieve Password</a></label>

                   
              </div>
              <div class="panel-footer login-footer">
                    <center>
                        <label><a class="btn btn-success login-elements" href="" data-toggle="modal" data-target="#terms">School Terms</a></label>
                    </center>
              </div>
            </div>
            <center><label><a class="btn btn-primary btn-xs register" href="#">Don't Have an Account?</a></label></center>    





    <div class="modal fade" tabindex="-1" role="dialog" id="register-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
            <h3>Register</h3>
            <form action="{{ route('register') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input class="form-control " type="text" name="email" id="email" value="{{ Request::old ('email')}}" >
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="firstname">First Name</label>
                    <input class="form-control" type="text" name="firstname" id="firstname" value="{{ Request::old('firstname')}}">
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Last Name</label>
                    <input class="form-control " type="text" name="lastname" id="lastname" value="{{ Request::old ('lastname')}}" >
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Middle Name</label>
                    <input class="form-control " type="text" name="middlename" id="middlename" value="{{ Request::old ('middlename')}}" >
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
              </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
        
    </div>
@endsection

