<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if(!$conn){
        die("connection failed due to ". mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
        $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phn = isset($_POST['phn']) ? $_POST['phn'] : '';
        $comments = isset($_POST['comments']) ? $_POST['comments'] : '';
    
        $query = "INSERT INTO `NSUT_trip`.`trip` (`fname`, `lname`, `age`, `gender`, `email`, `phn`, `comments`, `dt`) VALUES ('$fname', '$lname', '$age', '$gender', '$email', '$phn', '$comments', current_timestamp());";
    
        if (mysqli_query($conn, $query)) {
            // echo "Data inserted successfully.";
            // echo '<script>alert("Data inserted successfully. Thank you!");</script>';
            header("Location: thankyou.html");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // if(conn -> query($query) == TRUE){
        //     echo "successfully inserted";
        // }else{
        //     echo "Erorr: " . $conn -> error;
        // }

        $conn -> close();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip form</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="trip-form">  
        <h1>Welcome to NSUT Jodhpur Trip</h1>
        <h3>A college trip to build your unforgettable memories!</h3>
        <form action="index.php" method="post">

            <div class="form-grp">
                <label for="fname">FIRST NAME: </label>
                <input type="text" name="fname" id="fname" placeholder="Enter your first name" autofocus required>
          
                <label for="lname">LAST NAME: </label>
                <input type="text" name="lname" id="lname" placeholder="Enter your last name" required>
            </div>

            <div class="form-grp">
                <label for="age">AGE: </label>
                <input type="number" name="age" id="age" min="18" placeholder="Enter your age" required>
            </div>
            <div class="form-grp">
                <label for="gender">GENDER: </label>
                <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            </div>
            
            <div class="form-grp">
                <label for="email">EMAIL: </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-grp">
                <label for="phn">MOBILE NO: </label>
                <input type="tel" name="phn" id="phn" placeholder="Enter your mobile number" required>
            </div>

            <div class="form-grp">
                <label for="comments">COMMENTS: </label><br>
                <textarea id="comments" name="comments" rows="5" cols="100" fixed></textarea>
            </div>

            <button type="submit">SUBMIT</button>
    
            </form>
        
    </div>
</body>
</html>
