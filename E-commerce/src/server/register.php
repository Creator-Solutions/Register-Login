<?php 

    function Register_User(){

        include 'conn.php';
        include 'security.php';

        $conn = get_connection();

        $User_ID = gen_uuid();
        $FullName = $_POST['FullName'];
        $Email = $_POST['Email'];
        $Password = password_hash($_POST['Password'], PASSWORD_ARGON2ID);
        $Message = '';

        try{
            $SQL = "INSERT INTO user(User_ID, FullName, Email, User_Password) VALUES (?,?,?,?)";

            $stmt = $conn->prepare($SQL);
            $stmt->bind_param('ssss',  $User_ID, $FullName, $Email, $Password);
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            echo "Success";
        }catch (Exception $ex){
            echo "Failed";
        }
        
    }

    Register_User();
