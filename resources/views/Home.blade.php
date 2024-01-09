@extends('Layout.app')

@section('content')
    @include('Component.hero')
    @include('Component.counter')
    @include('Component.portfolio')
    @include('Component.projects')
    @include('Component.services')
    @include('Component.testimonials')
    @include('Component.blog')
    @include('Component.about')
    @include('Component.contact')
@endsection
