@if ($events)
    @foreach ($events as $event)
    <div id="home" style="background: url(/storage/images/events/{{ $event->image }}) no-repeat center center fixed; display: table; height: 100%; position: relative; width: 100%; background-size: cover;">
        <div class="landing-text text-center">
            <h1 class="display-4 font-weight-normal text-center">{{ $event->title }}</h1>
            <h3 class="lead font-weight-normal text-center">{!!  Illuminate\Support\Str::limit($event->description, 80) !!}</h3>
            <p>
                <a href="{{ route('front.events.show', $event->id) }}" class="btn btn-primary">
                    Register Now!
                </a>
            </p>
        </div>
    </div>
    <br><br>
    @endforeach
@endif
