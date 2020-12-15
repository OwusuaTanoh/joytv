@extends('front.essentials.layout')

@section('title', 'JoyTv - News')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> <a href="{{ route('front.news.index') }}" style="color: white;">News </a> <i class="fa fa-arrow-right"></i> {{ $item->title }} </h1>
    </div>
</div><br><br>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/storage/images/news/{{ $item->image }}" alt="" srcset="" style="width: 100%;">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="text-center">{{ $item->title }}</h2><br>
                <h3 class="text-center">
                    Date: {{ $item->created_at }}
                </h3> <br>
                <h3 class="text-center">
                    Author: {{ $item->user->name }}
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="lead">
                    {{ $item->description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection