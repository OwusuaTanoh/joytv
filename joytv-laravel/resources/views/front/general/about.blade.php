@extends('front.essentials.layout')

@section('title')

@section('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> About Us </h1>
        </div>
    </div>

    @include('front.essentials.event')

    <div class="padding container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/front/img/logo.jpg" alt="" srcset="" style="width: 100%;">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="text-center">All About Lizzy</h2>
                <p class="lead">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <p class="lead">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
            </p>
        </div> <br><br>

        <div class="row">
            <div class="col-md-6 text-center">
                <h2 class="text-center">About The Founder</h2>
                <p class="lead">
                    Lizzy is blah blah. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                </p>
            </div>

            <div class="col-md-6 text-center">
                <img src="img/logo.jpg" alt="" srcset="" style="width: 100%;">
            </div>
        </div><br><br>
        <h1 class="text-center">Our Team</h1><br>
        <div class="row text-center">
            <div class="col-md-4 text-center">
                <p>
                    <img src="/front/img/team.jpg" alt="" style="width: 100%;">
                    <small>Marketing Manager</small>
                </p>
                <p>Elizabeth Tanoh</p>
            </div>
            <div class="col-md-4 text-center">
                <p>
                    <img src="/front/img/team.jpg" alt="" style="width: 100%;">
                    <small>Marketing Manager</small>
                </p>
                <p>Elizabeth Tanoh</p>
            </div>
            <div class="col-md-4 text-center">
                <p>
                    <img src="/front/img/team.jpg" alt="" style="width: 100%;">
                    <small>Marketing Manager</small>
                </p>
                <p>Elizabeth Tanoh</p>
            </div>
        </div>
    </div>
@endsection