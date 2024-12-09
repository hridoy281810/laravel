<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .response-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        h2 {
            color: #333333;
            margin-bottom: 15px;
        }
        .error {
            color: #FF0000;
            font-size: 14px;
        }
        .success {
            color: #28a745;
            font-size: 16px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007BFF;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="response-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $message = htmlspecialchars(trim($_POST['message']));
            $errors = [];

           
            if (empty($name)) {
                $errors[] = "Name is required.";
            }
            if (empty($email)) {
                $errors[] = "Email is required.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }
            if (empty($message)) {
                $errors[] = "Message is required.";
            }

            if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
                $uploadDirectory = 'uploads/';
                $uploadFile = $uploadDirectory . basename($_FILES['file']['name']);
                
                if ($_FILES['file']['size'] > 5000000) { 
                    $errors[] = "File is too large.";
                }
                $fileType = pathinfo($uploadFile, PATHINFO_EXTENSION);
                $allowedTypes = ['jpg', 'png', 'pdf', 'docx'];
                if (!in_array($fileType, $allowedTypes)) {
                    $errors[] = "Only JPG, PNG, PDF, and DOCX files are allowed.";
                }
        
                if (empty($errors)) {
                    if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                        $errors[] = "Sorry, there was an error uploading your file.";
                    }
                }
            } else {
                $errors[] = "File is required.";
            }

       
            if (!empty($errors)) {
                echo "<h2>Errors:</h2>";
                foreach ($errors as $error) {
                    echo "<p class='error'>$error</p>";
                }
                echo "<a href='index.html'>Go Back</a>";
            } else {
                echo "<h2>Submission Successful!</h2>";
                echo "<p class='success'><strong>Name:</strong> $name</p>";
                echo "<p class='success'><strong>Email:</strong> $email</p>";
                echo "<p class='success'><strong>Message:</strong> $message</p>";
                echo "<p class='success'><strong>File Uploaded:</strong> " . $_FILES['file']['name'] . "</p>";
                echo "<a href='index.html'>Submit Another Response</a>";
            }
        } else {
            echo "<h2>Invalid Request</h2>";
        }
        ?>
    </div>
</body>
</html>
