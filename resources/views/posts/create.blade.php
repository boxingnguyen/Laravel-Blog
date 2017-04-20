@extends('main')

@section('title', '| Show an article')

@section('stylesheets')
    {{--<link rel="stylesheet" type="text/css" href="style.css">--}}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Add new post</h1>
                <hr> <!-- duong gach ngang-->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="{{ route('article.store') }}" method="POST" class="form-horizontal">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- in ra token sang kernel.php de xu ly, sua loi TokenMismatch-->
                    
                    <div class="form-group">
                        <label for="title" class="control-label">Title of the post</label>
                        <input class="form-control" type="text" name="title" required placeholder="Tieu de bai viet la cai deo gi??? -_-">
                    </div>

                    <div class="form-group">
                        <labe for="body" class="control-label">Content of the post</labe>
                        <input class="form-control" type="text" name="content" id ="content" required placeholder="Ban muon viet cai deo gi??? -_-">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Add the post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@stop

@section('scripts')

@stop
