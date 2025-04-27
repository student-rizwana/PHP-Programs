<?php
// Start the session
session_start();

// Display bank details from session
echo "<h3>Bank Details:</h3>";

echo "Bank Name: " . $_SESSION['bank_name'] . "<br>";
echo "Account Number: " . $_SESSION['account_number'] . "<br>";
echo "Account Holder: " . $_SESSION['account_holder'] . "<br>";
echo "IFSC Code: " . $_SESSION['ifsc_code'] . "<br>";
echo "Branch: " . $_SESSION['branch'] . "<br>";
