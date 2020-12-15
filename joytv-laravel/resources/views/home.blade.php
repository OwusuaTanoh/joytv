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

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-center offset-1">
                <h3>
                    User Requests from Contact Form
                </h3><br>
                <table id="" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (isset($contacts))
                          @foreach ($contacts as $contact)
                          <tr>
                            <th scope="row">{{ $contact->name }}</th>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->comment }}</td>
                            <td>{{ $contact->created_at }}</td>
                          </tr>
                          @endforeach
                      @else
                          <tr>
                            <td>
                              No Request Yet!
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
