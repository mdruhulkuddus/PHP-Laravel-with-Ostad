@extends('app')
@section('content')
    @include('component.CartModal')
    @include('component.AccountModal')
    @include('component.SearchModal')
    @include('component.AppBar')

    @include('component.HomeHero')
    @include('component.Categories')
    @include('component.Featured')
    
@endsection
