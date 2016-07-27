@extends('layout')

@section('content')
    <div id="app"></div>
@stop

@section('scripts')
    <script>
        window.User = {!! auth()->user() !!};
    </script>
    <script src="{{ elixir('js/app.js') }}"></script>
@stop