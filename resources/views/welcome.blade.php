@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div class="title" style="font-size: 20px; color: #2b542c">Eagle Financial Services</div>
                    <a href="{{url('/home')}}" style="font-size: 15px; color: blue">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
