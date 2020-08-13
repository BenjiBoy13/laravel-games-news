@extends("layouts.master")

@section('title', 'Games News | Home')

@section('content')
    @include('modules.hero', array(
        'title' => 'Games News',
        'info' => 'The best gamer news',
        'color' => '#b52b65'
    ))

    <div class="container">
        @if(empty($news))
            <div class="note-message">
                <p class="text-center"> Por el momento no tenemos notas </p>
            </div>
        @else
            <div class="card-columns">
                @foreach($news as $note)
                    <div class="note-wrapper" data-url="{{ $note->url_normalized }}">
                        <div class="card">
                            <div class="card-header">
                                <h2> {{ $note->title }} </h2>
                            </div>
                            <div class="card-body">
                                <p class="card-text"> {{ $note->summary }} </p>
                                <span> {{ $note->created_at }} </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@stop
