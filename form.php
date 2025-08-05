<?php 
            $conn = require 'db.php';
    
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phoneno = $_POST['phoneNo'];
            $message = $_POST['message'];
            $query = "insert into formData ( c_name, c_phoneNo, c_email, c_message) values(?,?,?,?)";


            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssss", $name ,$phoneno, $email, $message );

            if($stmt->execute())
            {
                header("Location: contact.php?status=success");
                exit();
            }
            else{
                header("Location: contact.php?status=false");
                exit();
            }

            $conn->close();
            $stmt->close();

    ?>