@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body text-center">
                        <h1>Welcome back</h1>
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                             id="profile_pic_home"/>
                        <h1><b>{{ Auth::user()->name }}</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection