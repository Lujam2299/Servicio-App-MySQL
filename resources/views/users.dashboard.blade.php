@extends('layout.layout')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('dashboard') }}
    </h2>
</x-slot>

@section('content')
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/image1.jpg') }}" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image2.jpg') }}" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image3.jpg') }}" class="d-block w-100" alt="Image 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

