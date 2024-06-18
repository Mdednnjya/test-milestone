<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Reviews</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Salon Reviews</h1>

    <!-- Review Submission Form -->
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="CustomerName">Customer Name</label>
            <input type="text" class="form-control" id="CustomerName" name="CustomerName" required>
        </div>
        <div class="form-group">
            <label for="StarRating">Star Rating</label>
            <select class="form-control" id="StarRating" name="StarRating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Comment">Comment</label>
            <textarea class="form-control" id="Comment" name="Comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>

    <!-- Display Reviews -->
    <div class="mt-5">
        <h2>Customer Reviews</h2>
        @if(count($reviews) > 0)
            @foreach($reviews as $review)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review['CustomerName'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: {{ $review['StarRating'] }} / 5</h6>
                        <p class="card-text">{{ $review['Comment'] }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No reviews yet. Be the first to leave a review!</p>
        @endif
    </div>
</div>
</body>
</html>
