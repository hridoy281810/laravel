<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish User Form</title>
    <style>
 
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(120deg, #74ebd5, #acb6e5);
        }

        .form-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px 40px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        .form-container h1 {
            margin: 0;
            font-size: 1.8rem;
            color: #333;
            text-align: center;
        }

        .form-container p {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, 
        .form-group textarea:focus {
            border-color: #007BFF;
        }

        .form-group textarea {
            resize: none;
            height: 100px;
        }

        .btn-submit {
            width: 100%;
            background: #007BFF;
            color: #ffffff;
            border: none;
            padding: 12px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background: #0056b3;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>User Form</h1>
        <p>Please fill out the form below to submit your details.</p>
        <form method="POST" action="process.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Enter your message" required></textarea>
            </div>
            <div class="form-group">
                <label for="file">Upload a File</label>
                <input type="file" name="file" id="file" required>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
        <p class="footer-text">Your data will remain secure.</p>
    </div>
</body>
</html>
