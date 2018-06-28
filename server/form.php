<?php 

require('form_email.php');

$form;

if(isset($_POST['lastname'])
   && isset($_POST['firstname']) 
   && isset($_POST['birthdate']) 
   && isset($_POST['email']) 
   && isset($_POST['sex'])
   && isset($_POST['country'])
   && isset($_POST['region'])
   && isset($_POST['job'])
   ) {

        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $country = $_POST['country'];
        $region = $_POST['region'];
        $job = $_POST['job'];

       $form = array(
           'lastname' => $lastname,
           'firstname' => $firstname,
           'birthdate' => $birthdate,
           'email' => $email,
           'sex' => $sex,
           'country' => $country,
           'region' => $region,
           'job' => $job
       );

       emailing($form);

       echo "Inscription envoyée. Vous allez recevoir un mail de confirmation...";
       echo 'Redirection ...';

       header('Refresh: 3; url=../index.php');
       
   }

  