@extends("layouts.master")

@section('title', 'Games News | ' . ucfirst($note->title))

@section('content')
    @include('modules.hero', array(
        'title' => $note->title,
        'info' => 'Creation date - ' . $note->created_at,
        'color' => '#fadcac'
    ))

    <div class="container">
        <div class="note-detail-wrapper">
            <div class="summary-wrapper">
                <div class="summary">
                    <p> {{ $note->summary }} </p>
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
