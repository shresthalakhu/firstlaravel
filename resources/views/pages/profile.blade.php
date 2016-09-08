@extends('layouts.default')

@section('content')

    <div id="featured-hotel" class="fh5co-bg-color">
        <div class="container">
            @if(Auth::check())
               <div class="row">
                   <div class="col-md-12">
                        <a class="btn btn-info pull-right" href="{{route('logout')}}">Logout</a>
                   </div>
               </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Logged In as: {{Auth::user()->user_name}}</h2>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                  {{'thankyou'}}

                </div></div></div>
    </div>
@stop

