@extends('layouts.default')

@section('content')

    <div id="featured-hotel" class="fh5co-bg-color">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
            <form class="registerform" action="{{ url('register') }}"  method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">First Name</label><input type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label><input type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label for="">Email</label><input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="">Plan</label>
                    <select class="form-control" name="role_id">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">User Name</label><input type="text" class="form-control" name="user_name">
                </div>
                <div class="form-group">
                    <label for="">Password</label><input type="password" class="form-control" name="password">
                </div>
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="SUBMIT">
            </form>
</div></div></div>
    </div>
@stop

