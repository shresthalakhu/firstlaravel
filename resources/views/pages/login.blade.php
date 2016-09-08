@extends('layouts.default')

@section('content')

    <div id="featured-hotel" class="fh5co-bg-color">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))

                        {!! Session::get('message') !!}

                    @endif
                    <form class="loginform" action="{{ route('postLogin') }}"  method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Username</label><input type="text" class="form-control" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label><input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for=""></label><button class="btn-info btn">Login</button>
                        </div>
                    </form>
                </div></div></div>
    </div>
@stop

