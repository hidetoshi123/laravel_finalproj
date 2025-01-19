<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style>
        .profile-container {
            text-align: center;
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
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Student Details</h2>
        <div class="card">
            <div class="card-header center-text">
                <h3>{{ $student->name }}</h3>
            </div>
            <div class="card-body">
                <div class="profile-container">
                    <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" width="100" height="100" class="img-thumbnail">
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
                <div class="text-center mt-4">
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

