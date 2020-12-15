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
            <h1 class="text-center">Add New News Item</h1>
            <p>
                <form action="{{ route('user.news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Title*</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
                        @error('title')
                            <small style="color:red;">{{ $errors->first('title') }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter description"></textarea>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </p>
        </div>
    </div>
</div> <br><br>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-center offset-1">
                <h3>
                    All News Items Added
                </h3><br>
                <table id="" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">User</th>
                        <th scope="col">Date</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (isset($news))
                          @foreach ($news as $item)
                          <tr>
                            <th scope="row">{{ $item->title }}</th>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('user.news.edit', $item->id) }}" class="btn btn-outline-success">Show/Edit</a>
                                <form action="{{ route('user.news.destroy', $item->id) }}" method="POST" >
                                    @method('DELETE')
                                    @csrf
        
                                    <button type="submit" class="btn btn-outline-danger">Remove</button>
                                </form> 
                            </td>
                          </tr>
                          @endforeach
                      @else
                          <tr>
                            <td>
                              No Data Yet!
                            </td>
                          </tr>
                      @endif
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
