@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="list-group">
                    <div class="list-group-item list-group-item-primary"><h4>{{$title}}</h4></div>

                    <div class="list-group-item">
                        @foreach ( $topics as $topic )
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ url('topic', $topic['id']) }}">{{ $topic->name }}</a>
                                    </h5>
                                    <p class="card-text">
                                        {{ $topic->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 