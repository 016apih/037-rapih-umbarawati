@extends('layouts.homepage.app')

@section('title', 'Homepage - PemulaBooks')

@section('content')

@include('pages.homepage.partials.hero')

@include('pages.homepage.partials.our-books')

@include('pages.homepage.partials.new-books')

@include('pages.homepage.partials.banner-motivations')

@include('pages.homepage.partials.categories')

@include('pages.homepage.partials.about-us')

@endsection
