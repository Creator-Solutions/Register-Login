<?php 

    include 'conn.php';

    $conn = get_connection();

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];        
    $Message = '';

    try{
        $SQL = "SELECT * FROM user WHERE Email=?";

        $stmt = $conn->prepare($SQL);
        $stmt->bind_param('s', $Email);
    
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    
    
        if (password_verify($Password, $row['User_Password'])){
            $Message = 'Authenticated';
        }else {
            $Message = 'Failed! Wrong Password';
        }
    }catch (Exception $x){
        $Message = $x;
    }
   

    echo $Message;





 

