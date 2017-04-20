@extends('main')

@section('title', '| Show an article')

@section('stylesheets')
    {{--<link rel="stylesheet" type="text/css" href="style.css">--}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 col-sm-offset-3">
            <a href="/" class="btn btn-link">
                <span class="span glyphicon glyphicon-chevron-left"></span>
                Back to home
            </a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="post">
                <h3 align="center">{{ $article->title }} </h3>
                <p align="center">
                    {!! $article->body !!}
                </p>
            </div>
        </div>

        <!-- end -->
        <div class="col-md-3">
            <h2>Sidebar</h2>
        </div>
    </div> <!-- end of head row -->

@endsection

@section('scripts')

@endsection