<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopify || Register</title>        
        <link href="../Styling/register.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>

        <div class="head">
            <h2>Shopify</h2>
        </div>

        <div class="container">
            <div class="left">
                <img src="../Images/login.jpg" />
            </div>
            <div class="right">
                <div class="block">
                    <h2>Register</h2>
                    <label for="username">Full Name</label>
                    <input type="text" id="fullname" />
                    <img src="../Images/user.png" class="user_icon"/>

                    <label for="username">Email</label>
                    <input type="text" id="email" />
                    <img src="../Images/email.png" class="email_icon"/>

                    <label for="password">Password</label>
                    <input type="password" id="password" />
                    <img src="../Images/lock.png" class="pass_icon"/>                   
                  
                    <input type="submit" value="Register" id="btnLogin"/>


                    <div class="acc">
                        <p>Alreay have an account? </p>
                        <a href="login.php">Login</a>
                    </div>
                </div>    
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#btnLogin').on('click', function(){
                    $.ajax({
                        method: 'POST',
                        url:'../../server/register.php',
                        data:{
                            FullName: $('#fullname').val(),
                            Email: $('#email').val(),
                            Password: $('#password').val(),
                        },
                        success:function(response){
                            if (response === 'Success'){
                                console.log('User Registered');
                            }else if (response === 'Failed'){
                                console.log('User Registration failed');
                            }
                        },
                        error: function(err){
                            console.log(err);
                        }
                    });
                });
            });
        </script>        
    </body>
</html>