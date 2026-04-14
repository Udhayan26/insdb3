@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="p-5 mb-4 bg-light rounded-3 border">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Inscription Database v3</h1>
                    <p class="col-md-8 fs-4">Welcome to the digital archive. Explore historical Tamil inscriptions by book, location, or geographical mapping.</p>
                    <a href="{{ url('/location') }}" class="btn btn-primary btn-lg">Explore Locations</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="text-muted">Total Books</h5>
                    <h2 class="fw-bold">--</h2>
                    <a href="{{ url('/books') }}" class="btn btn-outline-secondary btn-sm">View Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="text-muted">Locations</h5>
                    <h2 class="fw-bold">--</h2>
                    <a href="{{ url('/location') }}" class="btn btn-outline-secondary btn-sm">View Hierarchy</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="text-muted">Mapped Points</h5>
                    <h2 class="fw-bold">--</h2>
                    <a href="{{ url('/map') }}" class="btn btn-outline-secondary btn-sm">Open Map</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
