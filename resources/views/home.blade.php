@extends("layouts.master")

@section('title', 'Games News | Home')

@section('content')
    @include('modules.hero', array(
        'title' => 'Games News',
        'info' => 'The best gamer news',
        'color' => '#68b0ab'
    ))

    <div class="container">
        @foreach($news as $note)
            <div class="note-wrapper" data-url="{{ $note->url_normalized }}">
                <div class="note-basic-info">
                    <div class="note-title">
                        <h2> {{ $note->title }} </h2>
                    </div>
                    <div class="note-summary">
                        <p> {{ $note->summary }} </p>
                    </div>
                    <div class="note=date">
                        <span> {{ $note->created_at }} </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
