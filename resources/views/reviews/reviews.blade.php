@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="mt-5">
            <h2>Customer Reviews</h2>
            @if(count($reviews) > 0)
                <div class="row">
                    @foreach($reviews as $review)
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $review->customer_name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Rating: {{ $review->star_rating }} / 5</h6>
                                    <p class="card-text">{{ $review->comment }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No reviews yet. Be the first to leave a review!</p>
            @endif
        </div>
    </div>
@endsection
