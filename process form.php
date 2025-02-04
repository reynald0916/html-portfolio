<?php
// Pagkuha ng mga datos mula sa form
$name = $_POST[name];
$email = $_POST['email'];
$message = $_POST[message];

// Paglagay ng email address
$to_email = reynaldoyboa@gmail.com;

// Paglagay ng subject ng email
$subject = Mensahe mula sa iyong website;

// Paglagay ng mensahe ng email
$email_body = Name: $name\nEmail: $email\nMessage: $message";

// Paglagay ng header ng email
$headers = From: $email\r\n";

// Paglagay ng pag-valida ng datos
if (!empty($name) && !empty($email) && !empty($message)) {
  // Pagpadala ng email
  mail($to_email, $subject, $email_body, $headers);
} else {
  // Pagpapakita ng error message
  echo Please fill out all fields.";
}
?>
