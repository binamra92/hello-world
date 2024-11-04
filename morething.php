<?php
// Vulnerable code: Reflected XSS
if (isset($_GET['input'])) {
    $input = $_GET['input'];
    echo "You entered: $input"; // No sanitization or escaping applied
}
?>
