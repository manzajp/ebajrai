<?php 
    require_once("config.php");
?>

<?php

    if(isset($_POST))
    {
        $firstname     = $_POST['firstname'];
        $lastname      = $_POST['lastname'];
        $email         = $_POST['email'];
        $phone         = $_POST['phone'];
        $md5           = md5($_POST['password']);
        $sha1          = sha1($md5);
        $superpassword = crypt($sha1,'eb');
        
        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
        $insert = $db->prepare($sql);
        $result = $insert->execute([$firstname, $lastname, $email, $phone, $superpassword]);
        if($result)
        {
            echo "Account successfully created";
        }
        else
        {
            echo "Error encountered.";
        }
    }
    else
    {
        echo "No data.";
    }
        
?>