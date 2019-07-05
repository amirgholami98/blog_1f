@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('article.store') }}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="title" id="title" placeholder="title">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="description" id="description" placeholder="description">
                </div>
                <div class="col-12 mt-4">
                    <textarea class="form-control" name="body" id="body"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ثبت</button>
        </form>
    </div>
@endsection
