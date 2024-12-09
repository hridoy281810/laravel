<!-- <?php 

// $variable_name = "hell bangladesh";
// echo $variable_name."<br>";
// print_r($variable_name);
// echo "<br>";
// var_dump($variable_name);
// echo "<br>";

// $age = 23;
// echo $age."<br>";
// print_r($age);
// echo "<br>";
// $apple_price = 23.5;
// echo $apple_price."<br>";

// class Car {
//     public $model;
//     public function __construct($model){
//         $this -> model = $model;
//     }
// }

// $myCar = new Car("Toyota");

// echo $myCar -> model;
// echo "<br>";


// $skills = ["html", "css", "js", "php"];
// echo "skills: " .implode(", ", $skills)."<br>";


// $fruits = array("apple", "banana", "mango");
// echo $fruits[0]."<br>";


// $person = array("name" => "anis", "age" => 23, "country" => "bangladesh");  
// echo "Name: " .$person["name"]."<br>";
// echo "Age: " .$person["age"]."<br>";

// $matrix = array (
//     array(1, 2, 3),
//     array(4, 5, 6),
//     array(7, 8, 9),      
// );
// echo $matrix[0][0];
// echo $matrix[2][2];


// $numbers = array(5,6,1,25,3,6,24,12,8,9,10);
// sort($numbers);
// print_r($numbers);

// $person = array("anis","sayed");
// array_push($person, "shuvo", "roshid");
// echo $person[2];
// print_r($person);
// var_dump(in_array("shuvo", $person));

// $array = [1, 2, 3, 4, 5];
// $even = array_filter($array, function($value) {
//     return $value % 2 == 0;
// });
// print_r($even); // Output: [2, 4]

// var_dump($even);

// $filter = [1, 2, 3, 4, 5];
// $even = array_filter($filter, function($value){
//     return $value % 2 == 0;
// });
// print_r($even);

// $name = "hello anis how are you";
// echo strpos($name, "how");



?> -->
<!-- HTML form using GET method -->
<!-- <form method="GET" action="submit.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form> -->


<form method="POST" action="validate.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">    
</form>
<!-- submit.php (PHP code) -->
 
<?php



if($_SERVICE["REQUEST_METHOD"] = "POST"){
    $name = $_POST["email"];
    if(empty($email)){
        echo "email is required";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format!";
    }
    else{
        echo "Valid email: " . $email;
    }
}

?>
