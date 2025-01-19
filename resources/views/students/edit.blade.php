<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style>
        .profile-picture {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
        }
        .form-group {
            flex: 1;
            margin: 0 10px;
        }
        .button-group {
            margin-top: 20px;
        }
        .card {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Edit Student</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile-picture mb-4">
                        <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" width="100" height="100" class="img-thumbnail mt-2">
                        <label for="profile_picture">Profile Picture:</label>
                        <div class="text-center">
                            <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" required>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="{{ $student->contact }}" required>
                        </div>
                    </div>
                    <div class="text-center button-group">
                        <button type="submit" class="btn btn-primary">Update Student</button>
                    </div>
                    <div class="text-center button-group">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
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
