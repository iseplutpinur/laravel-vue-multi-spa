@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1>About</h1>
    <about />
@endsection
@push('scripts')
    @vite('resources/js/pages/about.js')
@endpush
