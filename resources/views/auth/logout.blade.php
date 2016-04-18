@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logout</div>
                <div class="panel-body">
                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <a href="/login" role="button" class="btn btn-primary">
                              <i class="fa fa-btn fa-sign-in"></i>Login
                          </a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
