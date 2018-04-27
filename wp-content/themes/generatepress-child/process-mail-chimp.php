<?php
// process.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    //if (empty($_POST['name']))
        //$errors['name'] = 'Name is required.';

    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';

    //if (empty($_POST['superheroAlias']))
        //$errors['superheroAlias'] = 'Superhero alias is required.';

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message
        $apiKey = "a8c285997c0ca98be1f503b057557a9a-us16";
        $email = $_POST['email'];
        $fname = "APSCUSTOMER";
        $server = "us16";
        $listid = "57228ed1f4";

        $auth = base64_encode( 'user:a8c285997c0ca98be1f503b057557a9a-us16');
        $data = array(
            'apikey'        => "a8c285997c0ca98be1f503b057557a9a-us16",
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => array(
                'FNAME' => $fname
                )
            );
        $json_data = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://us16.api.mailchimp.com/3.0/lists/57228ed1f4/members/');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic '.$auth));
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        $result = curl_exec($ch);

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Success!';
    }

    // return all our data to an AJAX call
    echo json_encode($data);