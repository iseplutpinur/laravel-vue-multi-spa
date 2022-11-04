@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <contact />
@endsection
@push('scripts')
    @vite('resources/js/pages/contact.js')
@endpush
