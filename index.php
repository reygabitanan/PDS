<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data Sheet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input.form-control, select.form-select {
            width: 35%;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="post">
    <div class="container mt-3 ml-3">
        <div class="alert alert-info" role="alert">
            <strong>Note:</strong> This is a sample Personal Data Sheet (PDS) form. Please fill out the required fields.
        <h1>Personal Data Sheet</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdsModal">
            Personal Data Sheet
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="pdsModal" tabindex="-1" aria-labelledby="pdsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdsModalLabel">Personal Data Sheet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <h5>Personal Information</h5>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname:</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname:</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middlename:</label>
                            <input type="text" id="middlename" name="middlename" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth:</label>
                            <input type="date" id="dob" name="dob" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="pob" class="form-label">Place of Birth:</label>
                            <input type="text" id="pob" name="pob" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="sex" class="form-label">Sex:</label>
                            <select id="sex" name="sex" class="form-select" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="civil_status" class="form-label">Civil Status:</label>
                            <select id="civil_status" name="civil_status" class="form-select" required>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="citizenship" class="form-label">Citizenship:</label>
                            <input type="text" id="citizenship" name="citizenship" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="height" class="form-label">Height (cm):</label>
                            <input type="number" id="height" name="height" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight (kg):</label>
                            <input type="number" id="weight" name="weight" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="blood_type" class="form-label">Blood Type:</label>
                            <input type="text" id="blood_type" name="blood_type" class="form-control" required>
                        </div>

                        <h5>Educational Background</h5>
                        <div class="mb-3">
                            <label for="highest_education" class="form-label">Highest Educational Attainment:</label>
                            <input type="text" id="highest_education" name="highest_education" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="school_name" class="form-label">School Name:</label>
                            <input type="text" id="school_name" name="school_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="year_graduated" class="form-label">Year Graduated:</label>
                            <input type="number" id="year_graduated" name="year_graduated" class="form-control">
                        </div>

                        <h5>Employment History</h5>
                        <div class="mb-3">
                            <label for="employer_name" class="form-label">Employer Name:</label>
                            <input type="text" id="employer_name" name="employer_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title:</label>
                            <input type="text" id="job_title" name="job_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="employment_duration" class="form-label">Employment Duration:</label>
                            <input type="text" id="employment_duration" name="employment_duration" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="mb-3">
                        <label class="form-label">What would you like to do with the PDF?</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="send_email" name="send_email" value="1">
                            <label class="form-check-label" for="send_email">Send PDF to my email</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="download_pdf" name="download_pdf" value="1">
                            <label class="form-check-label" for="download_pdf">Download PDF after submission</label>
                        </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
