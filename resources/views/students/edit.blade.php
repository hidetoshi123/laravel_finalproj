<!DOCTYPE html>
<html>
<head>
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
            max-width: 900px;
        }
        .card {
            margin-top: 50px;
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #343a40;
            color: #fff;
        }
        .form-group label {
            font-weight: bold;
        }
        .button-group {
            margin-top: 20px;
        }
        .profile-picture img {
            border-radius: 50%;
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
                <!-- Add navigation items here if needed -->
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Edit Student</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile-picture mb-4 text-center">
                        <div class="mt-3">
                            <label for="profile_picture"></label>
                            <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" width="150" height="150" class="img-thumbnail mt-2">
                            <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="grade">Grade:</label>
                            <select class="form-control" id="grade" name="grade" required>
                                <option value="1.0" {{ $student->grade == '1.0' ? 'selected' : '' }}>1.0</option>
                                <option value="1.25" {{ $student->grade == '1.25' ? 'selected' : '' }}>1.25</option>
                                <option value="1.50" {{ $student->grade == '1.50' ? 'selected' : '' }}>1.50</option>
                                <option value="1.75" {{ $student->grade == '1.75' ? 'selected' : '' }}>1.75</option>
                                <option value="2.0" {{ $student->grade == '2.0' ? 'selected' : '' }}>2.0</option>
                                <option value="2.25" {{ $student->grade == '2.25' ? 'selected' : '' }}>2.25</option>
                                <option value="2.50" {{ $student->grade == '2.50' ? 'selected' : '' }}>2.50</option>
                                <option value="2.75" {{ $student->grade == '2.75' ? 'selected' : '' }}>2.75</option>
                                <option value="3.0" {{ $student->grade == '3.0' ? 'selected' : '' }}>3.0</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact">Contact:</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="{{ $student->contact }}" required>
                        </div>
                    </div>
                    <div class="text-center button-group">
                        <button type="submit" class="btn btn-primary">Update Student</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary ml-2">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
