@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                <div class="col-sm-12">
                    <h5 class="card-title">{{ $music['a_name'] }}</h5>
                    <p class="card-text">{{ $music['title'] }}</p>
                    <br>
                    {!! $music['song_text'] !!}
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="/{{ $music['url_120'] }}" class="btn btn-primary">دانلود 120</a>
                    <a href="/{{ $music['url_320'] }}" class="btn btn-primary">دانلود 320</a>
                </div>
        </div>
    </div>
@endsection
