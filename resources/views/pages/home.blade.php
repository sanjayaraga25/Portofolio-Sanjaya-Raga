@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Personal portfolio of Sanjaya Raga Weninggalih — Informatics Graduate, Data Analyst & Machine Learning Enthusiast.')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.education')
    @include('partials.skills')
    @include('partials.projects')
    @include('partials.experience')
    @include('partials.organization')
    @include('partials.services')
    @include('partials.achievements')
    @include('partials.cta-banner')
    @include('partials.contact')
@endsection
