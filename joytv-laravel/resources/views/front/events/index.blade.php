@extends('front.essentials.layout')

@section('title', 'JoyTv - Contact Us')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> Events </h1>
    </div>
</div>

<div class="padding">
    <div class="container">
        <h1 class="text-center">Our Events</h1><br>
        <div class="row">
            @if ($events)
                @foreach ($events as $event)
                <div class="col-md-6 text-center">
                    <p>
                        <img src="/storage/images/events/{{ $event->image }}" alt="" width="100%">
                    </p>
                    <h3><a href="{{ route('front.events.show', $event->id) }}">{{ $event->title }}</a></h3>
                    <p>
                        {!!  Illuminate\Support\Str::limit($event->description, 80) !!} <a href="{{ route('front.events.show', $event->id) }}" class="btn btn-outline-primary">Register Now!</a>
                    </p>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection