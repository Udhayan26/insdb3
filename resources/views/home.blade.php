@extends('layouts.app')

@section('content')
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4">Tamil Epigraphy Database</h1>
        <p class="lead">Digital Archive & Research Portal for Historical Inscriptions</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa-solid fa-scroll fa-2x text-primary mb-3"></i>
                    <h5 class="card-title">Inscriptions</h5>
                    <h2 class="fw-bold">25,000+</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa-solid fa-book fa-2x text-success mb-3"></i>
                    <h5 class="card-title">Books / Series</h5>
                    <h2 class="fw-bold">42</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa-solid fa-location-dot fa-2x text-danger mb-3"></i>
                    <h5 class="card-title">Villages</h5>
                    <h2 class="fw-bold">1,205</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa-solid fa-calendar-days fa-2x text-warning mb-3"></i>
                    <h5 class="card-title">Timeline</h5>
                    <p class="mb-0">3rd BCE - 18th CE</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8">
            <h3>Recent Updates</h3>
            <table class="table table-hover bg-white shadow-sm mt-3">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Village</th>
                        <th>King / Period</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ARIE-123</td>
                        <td>Madurai</td>
                        <td>Pandya</td>
                        <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white"><strong>Quick Search</strong></div>
                <div class="card-body">
                    <form id="quickSearchForm">
                        <input type="text" class="form-control mb-3" placeholder="Search by Keyword...">
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
