<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data Sheet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pds-table {
            font-family: Arial, sans-serif;
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .pds-table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            vertical-align: top;
        }
        .pds-table .section-header{
            background: #f1f1f1;
            font-weight: bold;
            text-align: left;
        }
        .wide-input {
            width: 90%;
            display: inline-block;
            margin-bottom: 5px;
        }
        .checkbox-group input[type="checkbox"] {
            margin-right: 5px;
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
                        <table class="pds-table">
                            <tr class="section-header">
                                <td colspan="4">I. PERSONAL INFORMATION</td>
                            </tr>
                            <tr>
                                <td>2. SURNAME</td>
                                <td><input class="wide-input" type="text" name="surname"></td>
                                <td rowspan="2">NAME EXTENSION (JR., SR)</td>
                                <td rowspan="2"><input class="wide-input" type="text" name="name_ext"></td>
                            </tr>
                            <tr>
                                <td>FIRST NAME</td>
                                <td><input class="wide-input" type="text" name="first_name"></td>
                            </tr>
                            <tr>
                                <td>MIDDLE NAME</td>
                                <td><input class="wide-input" type="text" name="middle_name"></td>
                                <td>3. DATE OF BIRTH (mm/dd/yyyy)</td>
                                <td><input class="wide-input" type="text" name="dob"></td>
                            </tr>
                            <tr>
                                <td>4. PLACE OF BIRTH</td>
                                <td><input class="wide-input" type="text" name="birth_place"></td>
                                <td>16. CITIZENSHIP</td>
                                <td>
                                    <div class="checkbox-group">
                                        <input type="checkbox" name="citizenship" value="Filipino">Filipino<br>
                                        <input type="checkbox" name="citizenship" value="Dual">Dual Citizenship<br>
                                        <input type="checkbox" name="dual_type" value="by_birth">by birth
                                        <input type="checkbox" name="dual_type" value="by_naturalization">by naturalization<br>
                                        Pls. indicate country: <input class="wide-input" type="text" name="dual_country">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5. SEX</td>
                                <td>
                                    <input type="checkbox" name="sex" value="Male">Male
                                    <input type="checkbox" name="sex" value="Female">Female
                                </td>
                                <td>6. CIVIL STATUS</td>
                                <td>
                                    <input type="checkbox" name="civil_status" value="Single">Single
                                    <input type="checkbox" name="civil_status" value="Married">Married
                                    <input type="checkbox" name="civil_status" value="Widowed">Widowed
                                    <input type="checkbox" name="civil_status" value="Separated">Separated
                                    <input type="checkbox" name="civil_status" value="Other">Other/s
                                </td>
                            </tr>
                            <tr>
                                <td>7. HEIGHT (m)</td>
                                <td><input class="wide-input" type="text" name="height"></td>
                                <td>8. WEIGHT (kg)</td>
                                <td><input class="wide-input" type="text" name="weight"></td>
                            </tr>
                            <tr>
                                <td>9. BLOOD TYPE</td>
                                <td><input class="wide-input" type="text" name="blood_type"></td>
                                <td>10. GSIS ID NO.</td>
                                <td><input class="wide-input" type="text" name="gsis_id"></td>
                            </tr>
                            <tr>
                                <td>11. PAG-IBIG ID NO.</td>
                                <td><input class="wide-input" type="text" name="pagibig_id"></td>
                                <td>12. PHILHEALTH NO.</td>
                                <td><input class="wide-input" type="text" name="philhealth_id"></td>
                            </tr>
                            <tr>
                                <td>13. SSS NO.</td>
                                <td><input class="wide-input" type="text" name="sss_id"></td>
                                <td>14. TIN NO.</td>
                                <td><input class="wide-input" type="text" name="tin_id"></td>
                            </tr>
                            <tr>
                                <td>15. AGENCY EMPLOYEE NO.</td>
                                <td><input class="wide-input" type="text" name="employee_no"></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>17. RESIDENTIAL ADDRESS</td>
                                <td colspan="3">
                                    House/Block/Lot No. <input class="wide-input" type="text" name="res_house">
                                    Street <input class="wide-input" type="text" name="res_street">
                                    Subdivision/Village <input class="wide-input" type="text" name="res_subdivision">
                                    Barangay <input class="wide-input" type="text" name="res_barangay">
                                    City/Municipality <input class="wide-input" type="text" name="res_city">
                                    Province <input class="wide-input" type="text" name="res_province">
                                    ZIP CODE <input class="wide-input" type="text" name="res_zip">
                                </td>
                            </tr>
                            <tr>
                                <td>18. PERMANENT ADDRESS</td>
                                <td colspan="3">
                                    House/Block/Lot No. <input class="wide-input" type="text" name="perm_house">
                                    Street <input class="wide-input" type="text" name="perm_street">
                                    Subdivision/Village <input class="wide-input" type="text" name="perm_subdivision">
                                    Barangay <input class="wide-input" type="text" name="perm_barangay">
                                    City/Municipality <input class="wide-input" type="text" name="perm_city">
                                    Province <input class="wide-input" type="text" name="perm_province">
                                    ZIP CODE <input class="wide-input" type="text" name="perm_zip">
                                </td>
                            </tr>
                            <tr>
                                <td>19. TELEPHONE NO.</td>
                                <td><input class="wide-input" type="text" name="telephone"></td>
                                <td>20. MOBILE NO.</td>
                                <td><input class="wide-input" type="text" name="mobile"></td>
                            </tr>
                            <tr>
                                <td>21. E-MAIL ADDRESS (if any)</td>
                                <td colspan="3"><input class="wide-input" type="email" name="email"></td>
                            </tr>
                        </table>
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
