<?php

require('db_connection.php');
require_once('fpdf/fpdf.php');
require 'vendor/autoload.php'; // Load Composer packages

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Define all fields from the new PDS table
$fields = ['firstname', 'lastname', 'middlename', 'name_extension', 'dob', 'pob', 'sex', 'civil_status',
  'citizenship', 'citizenship_type', 'dual_by', 'dual_country',
  'height', 'weight', 'blood_type', 'gsis_id', 'pagibig_id', 'philhealth_id',
  'sss_id', 'tin_id', 'agency_employee_no',
  'res_house_block_lot', 'res_street', 'res_subdivision', 'res_barangay', 'res_city', 'res_province', 'res_zip',
  'perm_house_block_lot', 'perm_street', 'perm_subdivision', 'perm_barangay', 'perm_city', 'perm_province', 'perm_zip',
  'telephone', 'mobile',
  'highest_education', 'school_name', 'year_graduated',
  'employer_name', 'job_title', 'employment_duration',
  'email'
];

// Collect and sanitize input
$data = [];
foreach ($fields as $field) {
    $data[$field] = htmlspecialchars($_POST[$field] ?? '');
}

// SQL insert
$sql = "INSERT INTO pds (
    firstname, lastname, middlename, name_extension, 
    dob, pob, sex, civil_status,
    citizenship, citizenship_type, dual_by, dual_country,
    height, weight, blood_type,
    gsis_id, pagibig_id, philhealth_id, sss_id, tin_id, agency_employee_no,
    res_house_block_lot, res_street, res_subdivision, res_barangay, res_city, res_province, res_zip,
    perm_house_block_lot, perm_street, perm_subdivision, perm_barangay, perm_city, perm_province, perm_zip,
    telephone, mobile,
    highest_education, school_name, year_graduated,
    employer_name, job_title, employment_duration,
    email
) VALUES (
    ?, ?, ?, ?, 
    ?, ?, ?, ?, 
    ?, ?, ?, ?,
    ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, ?,
    ?, ?, ?, ?, ?, ?, ?,
    ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?
)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param(
    "ssssssssssssssssssssssssssssssssssssssssssss",  // 47 types: all strings
    $data['firstname'], $data['lastname'], $data['middlename'], $data['name_extension'],
    $data['dob'], $data['pob'], $data['sex'], $data['civil_status'],
    $data['citizenship'], $data['citizenship_type'], $data['dual_by'], $data['dual_country'],
    $data['height'], $data['weight'], $data['blood_type'],
    $data['gsis_id'], $data['pagibig_id'], $data['philhealth_id'], $data['sss_id'], $data['tin_id'], $data['agency_employee_no'],
    $data['res_house_block_lot'], $data['res_street'], $data['res_subdivision'], $data['res_barangay'], $data['res_city'], $data['res_province'], $data['res_zip'],
    $data['perm_house_block_lot'], $data['perm_street'], $data['perm_subdivision'], $data['perm_barangay'], $data['perm_city'], $data['perm_province'], $data['perm_zip'],
    $data['telephone'], $data['mobile'],
    $data['highest_education'], $data['school_name'], $data['year_graduated'],
    $data['employer_name'], $data['job_title'], $data['employment_duration'],
    $data['email']
);

$stmt->execute();
$stmt->close();
$conn->close();

// Generate PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, "Personal Data Sheet", 0, 1, 'C');
$pdf->Ln(5);

foreach ($data as $key => $value) {
    $label = ucwords(str_replace('_', ' ', $key));
    $pdf->Cell(60, 10, "$label: $value", 0, 1);
}

// Create temporary PDF file
$temp_pdf = tempnam(sys_get_temp_dir(), 'pds_') . '.pdf';
$pdf->Output('F', $temp_pdf);

// Email or download options
$send_email = isset($_POST['send_email']);
$download_pdf = isset($_POST['download_pdf']);

if ($send_email) {
    // Check if email is not empty and valid before proceeding
    if (!empty($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'gabitananrey@gmail.com'; // your sender email
            $mail->Password   = 'voqk sfny mjxj eiqe';    // app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('your_email@gmail.com', 'PDS Form');

            $mail->addAddress($data['email'], $data['firstname']);
            $mail->addAttachment($temp_pdf, 'PersonalDataSheet.pdf');
            $mail->isHTML(true);
            $mail->Subject = 'Your Personal Data Sheet Submission';
            $mail->Body    = 'Hi ' . $data['firstname'] . ',<br>Thank you for submitting your personal data sheet. Please find the attached PDF.';

            $mail->send();
        } catch (Exception $e) {
            echo "Email failed: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email failed: Invalid recipient email address.";
    }
}

// Handle download
if ($download_pdf) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="PersonalDataSheet.pdf"');
    readfile($temp_pdf);
    unlink($temp_pdf);
    exit;
}

// Clean up temp PDF if only emailed
unlink($temp_pdf);

// Final message
echo "<script>alert('Submission successful!" . ($send_email ? " PDF emailed." : "") . "'); window.location.href = 'index.php';</script>";
?>
