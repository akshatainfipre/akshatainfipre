<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Submission</title>
</head>
<body>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $qualification = $_POST["qualification"];

    // Display retrieved data
    echo "<h2>Form Data:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Contact:</strong> $contact</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Qualification:</strong> $qualification</p>";
}
?>

</body>
</html>
