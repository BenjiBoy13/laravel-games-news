@extends("layouts.master")

@section('title', 'Games News | ' . ucfirst($note->title))

@section('content')
    @include('modules.hero', array(
        'title' => $note->title,
        'info' => 'Creation date - ' . $note->created_at,
        'color' => '#a35d6a'
    ))

    <div class="container">
        <div class="note-detail-wrapper">
            <div class="summary-wrapper">
                <div class="summary">
                    <blockquote class="blockquote">
                        <p class="mr-5 ml-5"> {{ $note->summary }} </p>
                    </blockquote>
                </div>
                <hr />
            </div>
            <div class="content-wrapper">
                <div class="content">
                    <p> {!! $note->content !!} </p>
                </div>
            </div>
        </div>
    </div>
@stop
