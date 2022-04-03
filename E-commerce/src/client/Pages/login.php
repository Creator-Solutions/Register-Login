<!DOCTYPE html>
<hmtl>
    <head>
        <title>E-Store || Login</title>        
        <link href="../Styling/login.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>

        <div class="head">
            <h2>Shopify</h2>
        </div>

        <div class="container">
            <div class="left">
                <img src="../Images/login.jpg" alt="login"/>
            </div>
            <div class="right">
                <div class="block">
                    <h2>Login</h2>
                    <label for="username">Username</label>
                    <input type="email" id="email" />
                    <img src="../Images/email.png" class="email_icon"/>
                    <label for="password">Password</label>
                    <input type="password" id="password" />
                    <img src="../Images/lock.png" class="pass_icon"/>
                    <div class="remember">
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                  
                    <input type="submit" value="Login" id="btnLogin"/>


                    <div class="acc">
                        <p>Don't have an account? </p>
                        <a href="Register.php">Register</a>
                    </div>
                </div>
               
            </div>
        </div>

        <script type="text/javascript">
            
            $(document).ready(function(){

                $('#btnLogin').on('click', function(){
                    $.ajax({
                        method: 'POST',
                        url: '../../server/auth.php',
                        data: {
                            Email: $('#email').val(),
                            Password: $('#password').val(),
                        },
                        success: function(response){
                           window.location.href= './auth/index.html?page_type=main';
                        },
                        error:function(err){
                            console.log(err);
                        }
                    })
                })
            })

        </script>

    </body>
</hmtl>