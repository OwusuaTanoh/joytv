@extends('front.essentials.layout')

@section('title', 'JoyTv - News')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> News </h1>
    </div>
</div>

@include('front.essentials.event')

<div class="padding">
    <div class="container">
        <h1 class="text-center">News</h1><br>
        <div class="row">
            @if (isset($news))
                @foreach ($news as $item)
                    
                @endforeach
            @endif
            <div class="col-md-4 text-center">
                <p>
                    <img src="/storage/images/news/{{ $item->image }}" alt="" width="100%">
                </p>
                <h3><a href="{{ route('front.news.show', $item->id) }}">{{ $item->title }}</a></h3>
                <h6>By <small>{{ $item->user->image }}</small> on {{ $item->created_at }}</h6>
                <p>
                    {!!  Illuminate\Support\Str::limit($item->description, 120) !!}<a href="{{ route('front.news.show', $item->id) }}" class="btn btn-outline-primary">Read More</a>
                </p>
            </div>
            
        </div>
    </div>
</div>

@endsection