<?php
// Start the session
session_start();

// Store bank details in session variables
$_SESSION['bank_name'] = "State Bank of India";
$_SESSION['account_number'] = "1234567890";
$_SESSION['account_holder'] = "Rizwana Banu Dange";
$_SESSION['ifsc_code'] = "SBIN0000123";
$_SESSION['branch'] = "Dharwad Main Branch";

echo "Bank details have been stored in session successfully.";
