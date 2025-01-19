<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #343a40;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .profile-container {
            text-align: center;
            margin-top: 20px;
        }
        .profile-container img {
            border-radius: 50%;
        }
        .profile-details {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .profile-details div {
            flex: 1;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary, .btn-warning {
            width: 150px;
        }
        .text-center {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Student Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.create') }}">Add Student</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2 class="mb-4 text-center">Student Details</h2>
        <div class="card">
            <div class="card-header center-text">
                <h3>Student Information</h3>
            </div>
            <div class="card-body">
                <div class="profile-container">
                    <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" width="150" height="150" class="img-thumbnail">
                    <h3>{{ $student->name }}</h3>
                </div>
                <div class="profile-details">
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <p>{{ $student->age }}</p>
                    </div>
                    <div class="form-group">
                        <label for="grade">Grade:</label>
                        <p>{{ $student->grade }}</p>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact:</label>
                        <p>{{ $student->contact }}</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Back to List</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit Student</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
