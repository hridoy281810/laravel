
<form method="POST" action="/larabalLearning/validate.php">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
  
    if (empty($email)) {
        echo "Email is required!";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
    } else {
        echo "Valid email: " . $email;
    }
}
?>
