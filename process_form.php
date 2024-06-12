<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <h2>Form Data</h2>
    <?php
    // Retrieving form data using the GET method
    if (isset($_GET['name']) && isset($_GET['email'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];

        echo "Name: $name<br>";
        echo "Email: $email<br>";
    } else {
        echo "Form data not submitted.";
    }
    ?>
</body>
</html>
