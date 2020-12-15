@extends('front.essentials.layout')

@section('title', 'JoyTv - News')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> <a href="{{ route('front.events.index') }}" style="color: white;">Events </a> <i class="fa fa-arrow-right"></i> {{ $event->title }} </h1>
    </div>
</div><br><br>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/storage/images/events/{{ $event->image }}" alt="" srcset="" style="width: 100%;">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="text-center">{{ $event->title }}</h2><br>
                <h3 class="text-center">
                    Date: {{ $event->created_at }}
                </h3>
                <p>
                    Register here: <a href="{{ $event->link }}" target="__blalnk">{{ $event->link }}</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="lead">
                    {{ $event->description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection