<?php
require 'vendor/autoload.php'; // Path to autoload.php file

use Mailgun\Mailgun;

// Initialize Mailgun client
$mg = Mailgun::create('09e2c31f9cff763c9f776764e53631fd-c30053db-bd94f0f2
');

// Set the domain for sending emails
$domain = 'sandbox6da39d83a6a744968535649ba1114bb4.mailgun.org';

// Set email parameters
$params = [
    'from' => 'alihanfi04@gmail.com',
    'to' => 'nosystemissafe419@gmail.com',
    'subject' => 'Test email',
    'text' => 'This is a test email sent from alihanfi using PHP',
];

// Send the email
$result = $mg->messages()->send($domain, $params);

// Check if email was sent successfully
if ($result->http_response_code === 200) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed.';
}
?>
