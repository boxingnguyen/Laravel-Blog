@extends('main')

@section('title', '| Homepage')

@section('stylesheets')
    {{--<link rel="stylesheet" type="text/css" href="style.css">--}}
@endsection

@section('content')
<!-- vai template: twig Smarty Zend-->
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 align="center">Welcome to My Blog!</h1>
                <p class="lead" align="center">Thank you so much for visiting. This is my test website built with Laravel. </p>
            </div>
        </div>
    </div>
    <!-- end of header .row -->

    <div class="row">
        <!-- start -->
        <div class="col-md-6 col-md-offset-3">
            @foreach($post as $value)
            <div class="post">
                <h3 align="center">{{ $value->title}} </h3>
                <p align="center">
                    {!! $value->body  !!}
                </p>
                <a style="padding-left: 44%" href= "{{url('/articles/'.$value->id)}}">Read More</a>
            </div>
            @endforeach
        </div>

        <!-- end -->
        <div class="col-md-3">
            <h2>Sidebar</h2>
        </div>
    </div> <!-- end of head row -->

@stop

@section('scripts')

@stop