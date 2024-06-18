<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Create Reservation</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" required>
        </div>
        <div class="form-group">
            <label for="ActivePhoneNumber">Active Phone Number</label>
            <input type="text" class="form-control" id="ActivePhoneNumber" name="ActivePhoneNumber" required>
        </div>
        <div class="form-group">
            <label for="Typeofservice">Type of Service</label>
            <select class="form-control" id="Typeofservice" name="Typeofservice" required>
                <option value="Haircuts and styling">Haircuts and styling</option>
                <option value="Manicure and pedicure">Manicure and pedicure</option>
                <option value="Facial treatments">Facial treatments</option>
            </select>
        </div>
        <div class="form-group">
            <label for="DateandTime">Date and Time</label>
            <input type="datetime-local" class="form-control" id="DateandTime" name="DateandTime" required>
        </div>
        <button type="submit" class="btn btn-primary">Make Reservation</button>
    </form>
</div>
</body>
</html>

