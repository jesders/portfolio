@extends('layouts.app')

@section('content')

    @component('components.example')
        @slot('title')
            This is a title from a view
        @endslot
        
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iure ullam suscipit hic eum quae.
    @endcomponent

@endsection