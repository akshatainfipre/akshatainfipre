<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    
    // Display the retrieved data
    echo "<h2>Form Data</h2>";
    echo "<p><strong>Title:</strong> $title</p>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Contact:</strong> $contact</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Qualification:</strong> $qualification</p>";

    // Display the uploaded image if available
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/'; // Directory where the file is stored
        $uploadFile = $uploadDir . basename($_FILES['image']['name']); // Path to the uploaded file
        echo "<p><strong>Uploaded Image:</strong> <img src='$uploadFile' alt='Uploaded Image'></p>";
    }
}
?>

</body>
</html>
