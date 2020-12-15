@extends('backend.essentials.layout')

@section('title','JoyTV - Dashboard')

@section('content')

<div class="jumbotron">
  <div class="container text-center">
      <h1> User Dashboard </h1>
  </div>
</div><br><br>

@if (Auth::user()->role!=='admin')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Dashboard') }}</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  {{ __('You are logged in!') }}
              </div>
          </div>
      </div>
  </div>
</div>
@else

<div class="padding container">
    <div class="row">
        @include('front.essentials.message')
        <div class="col-md-9 offset-1 text-center">
            <h1 class="text-center">Edit: {{ $item->title }}</h1>
            <p>
                <form method="POST" action="{{ route('user.news.update', $item->id) }}"  enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Title*</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" required value="{{ $item->title }}">
                        @error('title')
                            <small style="color:red;">{{ $errors->first('title') }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter description">{{ $item->description }}</textarea>
                        @error('description')
                            <small style="color:red;">{{ $errors->first('description') }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                        @error('image')
                            <small style="color:red;">{{ $errors->first('image') }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Edit </button>
                  </form>
            </p>
        </div>
    </div>
</div> 
<hr>
<br><br>
<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-center offset-1">
                <h3>
                    {{ $item->title }}
                </h3>
                <h4>
                    <small>By {{ $item->user->name }}</small>
                </h4>
                <p>
                    <img src="/storage/images/news/{{ $item->image }}" alt="" style="width: 100%">
                </p>
                <p style="text-align: justify">
                    {{ $item->description }}
                </p>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
