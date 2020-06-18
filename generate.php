<?php

use Classes\GeneratePDF;

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit;
}

require_once 'vendor/autoload.php';

$fname  = $_POST['fname'];
$lname  = $_POST['lname'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$enquiry  = $_POST['enquiry'];


$data = [

    'name_field' => $fname . ' ' .$lname,
    'email_field' => $email,
    'phone_field' => $phone,
    'enquiry_field' => $enquiry
];


$pdf = new GeneratePDF;
$response = $pdf->generate($data);


header('Location: thanks.php?fname=' . $fname . '&link=' . $response);
