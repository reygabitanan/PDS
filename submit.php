<?php

require('db_connection.php');
require_once('fpdf/fpdf.php');
require 'vendor/autoload.php'; // Load Composer packages

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Collect form data safely
$data = [];
$fields = ['firstname', 'lastname', 'middlename', 'dob', 'pob', 'sex', 'civil_status', 'citizenship', 'height', 'weight', 'blood_type', 'highest_education', 'school_name', 'year_graduated', 'employer_name', 'job_title', 'employment_duration', 'email'];

foreach ($fields as $field) {
    $data[$field] = htmlspecialchars($_POST[$field] ?? '');
}

// Insert into DB
$stmt = $conn->prepare("INSERT INTO pds (
    firstname, lastname, middlename, dob, pob, sex, civil_status, citizenship, height, weight, blood_type,
    highest_education, school_name, year_graduated,
    employer_name, job_title, employment_duration, email
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "ssssssssddssssssss",
    $data['firstname'],
    $data['lastname'],
    $data['middlename'],
    $data['dob'],
    $data['pob'],
    $data['sex'],
    $data['civil_status'],
    $data['citizenship'],
    $data['height'],
    $data['weight'],
    $data['blood_type'],
    $data['highest_education'],
    $data['school_name'],
    $data['year_graduated'],
    $data['employer_name'],
    $data['job_title'],
    $data['employment_duration'],
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

// Detect user options
$send_email = isset($_POST['send_email']);
$download_pdf = isset($_POST['download_pdf']);

// Handle email
if ($send_email) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'gabitananrey@gmail.com'; // change this
        $mail->Password   = 'voqk sfny mjxj eiqe';    // use app password
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
}

// Handle download
if ($download_pdf) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="PersonalDataSheet.pdf"');
    readfile($temp_pdf);
    unlink($temp_pdf);
    exit;
}

// Clean up if only emailed
unlink($temp_pdf);

// Final message
echo "<script>alert('Submission successful!" . ($send_email ? " PDF emailed." : "") . "'); window.location.href = 'index.php';</script>";
?>