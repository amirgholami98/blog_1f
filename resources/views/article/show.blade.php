@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <hr>
                            <p class="card-text">{{ $article['des'] }}</p>
                            <p class="card-text">{!! $article['body'] !!}</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
