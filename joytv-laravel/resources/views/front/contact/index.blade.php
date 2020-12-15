@extends('front.essentials.layout')

@section('title', 'JoyTv - Contact Us')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1><a href="/" style="color: white;">Home</a> <i class="fa fa-arrow-right"></i> Contact Us </h1>
    </div>
</div>

@include('front.essentials.event')

@include('front.essentials.message')

<div class="padding container">
    <div class="row">
        
        <div class="col-md-6 text-center">
            <h3>
                Contact Us via the Form
            </h3>
            <p>
                <form action="{{ route('front.contact.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </p>
        </div>

        <div class="col-md-6 text-center">
            <h2 class="text-center">Contact Details</h2><br>
            <h3>
                <i class="fa fa-map-marker" style="font-size: 50px;"></i> Accra, Ghana
            </h3><br>
            <h3>
                <i class="fa fa-envelope" style="font-size: 50px;"></i> info@lizzy.com
            </h3><br>
            <h3>
                <i class="fa fa-phone" style="font-size: 50px;"></i> +233 24 123 4567
            </h3><br>
        </div>
    </div>
</div> <br><br>

    {{-- <div class="padding">
        <div class="container">
            <div class="row">
                <p class="text-center">
                    Let's embed a google map.
                </p>
            </div> <br><br>
        </div>
    </div> --}}
@endsection