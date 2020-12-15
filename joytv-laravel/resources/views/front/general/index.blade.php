@extends('front.essentials.layout')


@section('content')
    <div class="position-relative" style="background: url({{ asset('front/img/header.jpg') }}) no-repeat center center fixed; width: 100%; height: 500px; background-size: cover;">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Joy TV</h1>
            <p class="lead font-weight-normal">Joy Tv provides 24 hours of non-stop, real entertaining action transmitting in Ghana and Accross Africa with programmes from the world's best studios. Programming genres include, award winning Series and Original Productions, Movies, Telenovelas, Reality, Lifestyle and Game shows, Documentaries, Animations, Religious and Family shows. The channel delivers programming for the whole family.</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <br>

    @include('front.essentials.event')

    <div class="padding container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="front/img/logo.jpg" alt="" srcset="" style="width: 100%;">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="text-center">All About Joy TV</h2>
                <p class="lead">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, ... <a href="{{ route('front.about') }}" class="btn btn-primary">Click to Learn More</a>
                </p>
            </div>
        </div>
    </div><br><br>

    <div class="padding">
        <div class="container">
            <h1 class="text-center">Our Services</h1><br>
            <div class="row">
                <div class="col-md-4 text-center">
                    <p>
                        <a href=""><i class="fa fa-laptop" style="font-size: 50px;"></i></a>
                    </p>
                    <h3>Web Design</h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <p>
                        <a href=""><i class="fa fa-cloud" style="font-size: 50px;"></i></a>
                    </p>
                    <h3>Cloud Computing</h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <p>
                        <a href=""><i class="fa fa-user" style="font-size: 50px;"></i></a>
                    </p>
                    <h3>User Management</h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
                <div class="container text-center">
                    <a href="{{ route('front.services') }}" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="padding">
        <div class="container">
            <h1 class="text-center">Some of Our Works</h1><br>
            <div class="row">
                @if ($projects)
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
                <div class="container text-center">
                    <a href="{{ route('front.projects.index') }}" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="padding">
        <div class="container">
            <h1 class="text-center">From News</h1><br>
            <div class="row">
                @if (isset($news))
                    @foreach ($news as $item)
                    <div class="col-md-4 text-center">
                        <p>
                            <img src="/storage/images/news/{{ $item->image }}" alt="" width="100%">
                        </p>
                        <h3><a href="{{ route('front.news.show', $item->id) }}">{{ $item->title }}</a></h3>
                        <h6>By <small>{{ $item->user->name }} </small> on {{ $item->created_at }}</h6>
                        <p>
                            {!!  Illuminate\Support\Str::limit($item->description, 120) !!}<a href="{{ route('front.news.show', $item->id) }}" class="btn btn-outline-primary">Read More</a>
                        </p>
                    </div>
                    @endforeach
                @endif
                
                <div class="container text-center">
                    <a href="{{ route('front.news.index') }}" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection