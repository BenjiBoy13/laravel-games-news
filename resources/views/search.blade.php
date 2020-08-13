@extends("layouts.master")

@section('title', 'Games News | ' . $text)

@section('content')
    @include('modules.hero', array(
        'title' => 'Search for ' . $text,
        'info' => 'Results ' . $count,
        'color' => '#c26565'
    ))

    <div class="container">
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
    </div>
@stop
