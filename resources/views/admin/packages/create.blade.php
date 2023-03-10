@extends('admin.layouts.app')
@section('meta_title', 'Create Destinations Admin Panel')

@section('content')
<section class="destinations md:px-8 px-3 py-8">
    <h2 class="text-gray-dark text-2xl font-medium mb-4">Create Destination</h2>
    {!! Form::open(['url' => route('admin.destinations.store'), 'method' => 'POST']) !!}
        @include('admin.destinations.fields')
    {!! Form::close() !!}
</section>
@endsection