@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @if($articles->count()<= 0)
        <p>not post seved</p>
        @endif
        @foreach($articles as $article)
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $article['title'] }}</h5>
            <p class="card-text">{{ $article['des'] }}</p>
            <a href="{{route('article.show',['id'=>$article['id'] ])}}" class="btn btn-primary">ادامه</a>
          </div>
        </div>
      </div>
        @endforeach
    </div>
</div>
@endsection
