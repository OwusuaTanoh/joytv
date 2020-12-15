@extends('front.essentials.layout')

@section('title', 'JoyTv - Contact Us')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> Projects </h1>
    </div>
</div>

@include('front.essentials.event')

<div class="padding">
    <div class="container">
        <h1 class="text-center">Our Work</h1><br>
        <div class="row">
            @if (isset($projects))
                @foreach ($projects as $project)
                <div class="col-md-4 text-center">
                    <p>
                        <img src="/storage/images/projects/{{ $project->image }}" alt="" width="100%">
                    </p>
                    <h3><a href="{{ route('front.projects.show',$project->id) }}">{{ $project->title }}</a></h3>
                    <p>
                        {!!  Illuminate\Support\Str::limit($project->description, 120) !!} <a href="{{ route('front.projects.show',$project->id) }}" class="btn btn-outline-primary">Learn More</a>
                    </p>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection