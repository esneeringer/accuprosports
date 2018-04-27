<?php
// process.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: info@accuprosports.com' . "\r\n";
        
        mail("support@accuprosports.com","Web Contact Form","Customer Name: " . $name . "<br /> E-mail: " . $email . "<br /> Message: " . $message, $headers);

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Success!';
    }
    // return all our data to an AJAX call
    echo json_encode($data);