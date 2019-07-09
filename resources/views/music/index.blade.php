@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($musices as $music)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $music['a_name'] }}</h5>
                            <p class="card-text">{{ $music['title'] }}</p>
                            <a href="{{route('music.show',['id'=>$music['id'] ])}}" class="btn btn-primary">ادامه</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
