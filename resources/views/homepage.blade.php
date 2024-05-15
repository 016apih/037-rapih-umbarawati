@extends('layouts.app')

@section('title', 'Homepage - PemulaBooks')

@section('content')

@include('pages.homepage.hero')

@include('pages.homepage.our-books')

@include('pages.homepage.new-books')

@include('pages.homepage.banner-motivations')

@include('pages.homepage.categories')

@include('pages.homepage.about-us')

@endsection
