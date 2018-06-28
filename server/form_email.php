<?php
function emailing($form) {
       $to = $form['email'];
       $message = "Registration success : \n last name: ".$form['lastname']
                                  . "\n first name: ".$form['firstname']
                                  . "\n birth: ".$form['birthdate']
                                  . "\n sex: ".$form['sex']
                                  . "\n country: ".$form['country']
                                  . "\n region: ".$form['region']
                                  . "\n job: ".$form['job'];
       $subject = 'donnees appli test';
       $headers = 'From: lionelrenier@sfr.fr'."\r\n".
                  'Bcc: lionelrenier@sfr.fr'."\r\n".
                  'X-Mailer: PHP/'.phpversion();
       mail($to, $subject, $message, $headers);
   }