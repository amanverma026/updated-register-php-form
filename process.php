

<?php

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $phoneNo = isset($_POST['phoneNo']) ? $_POST['phoneNo'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';

    if(empty($gender)) {
        echo "Gender is required!";
        exit;   
    }

   
    $formData = array(
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'phoneNo' => $phoneNo,
        'gender' => $gender
    );

    
    print_r($formData);

} else {
    echo "Form not submitted!";
}
?>

