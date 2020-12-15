@extends('front.essentials.layout')

@section('title', 'JoyTv - News')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> <a href="{{ route('front.projects.index') }}" style="color: white;">Projects</a> <i class="fa fa-arrow-right"></i> {{ $project->title }} </h1>
    </div>
</div> <br><br>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/storage/images/projects/{{ $project->image }}" alt="" srcset="" style="width: 100%;">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="text-center">{{ $project->title }}</h2><br>
                <h3 class="text-center">
                    Date: {{ $project->created_at }}
                </h3> <br>
                <h3 class="text-center">
                    Client: {{ $project->client }}
                </h3>
                <p>
                    Rating: <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <p class="lead">
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection